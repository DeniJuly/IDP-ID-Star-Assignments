<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex items-center justify-center h-screen">
    <form action="./question-6.php" method="post" class=" w-full max-w-sm min-w-[500px]">
        <h1 class="font-bold mb-3">Kalkulator Sederhana</h1>
        <div class="flex gap-3 items-center">
            <div class="flex flex-1 flex-col">
                <label for="angka1" class="mb-2">Angka 1</label>
                <input type="number" value="<?= $_POST['angka1'] ? $_POST['angka1'] : 0 ?>" name="angka1" id="angka1" class="bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" placeholder="Angka Pertama...">
            </div>
            <select name="operasi" id="operasi" class="mt-8 text-sm border border-slate-200 rounded px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-400 shadow-sm focus:shadow-md appearance-none cursor-pointer">
                <option value="+" <?= $_POST['operasi'] == '+' ? 'selected' : '' ?>>+</option>
                <option value="-" <?= $_POST['operasi'] == '-' ? 'selected' : '' ?>>-</option>
                <option value="/" <?= $_POST['operasi'] == '/' ? 'selected' : '' ?>>/</option>
                <option value="x" <?= $_POST['operasi'] == 'x' ? 'selected' : '' ?>>x</option>
            </select>
            <div class="flex flex-1 flex-col">
                <label for="angka2" class="mb-2">Angka 2</label>
                <input type="number" value="<?= $_POST['angka2'] ? $_POST['angka2'] : 0 ?>" name="angka2" id="angka2" class="flex-1 bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" placeholder="Angka Kedua...">
            </div>
        </div>
        <button type="submit" class="w-full mt-4 rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
            Hitung
        </button>
        <h2 class="font-bold mt-4">Hasil:
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $angka1 = (int)$_POST['angka1'];
                $angka2 = (int)$_POST['angka2'];
                $operasi = $_POST['operasi'];

                switch ($operasi) {
                    case '+':
                        $hasil = $angka1 + $angka2;
                        break;
                    case '-':
                        $hasil = $angka1 - $angka2;
                        break;
                    case '/':
                        $hasil = $angka2 != 0 ? $angka1 / $angka2 : "Tidak dapat dibagi dengan nol";
                        break;
                    case 'x':
                        $hasil = $angka1 * $angka2;
                        break;
                    default:
                        $hasil = "Operasi tidak valid";
                }
                echo "$hasil";
            }
            ?>
        </h2>
    </form>
</body>

</html>