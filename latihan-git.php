<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penentuan Plat Kendaraan</title>
</head>
<body>
    <h1>Penentuan Plat Kendaraan</h1>
    <input type="text" id="inputPlat" placeholder="Masukkan Plat Kendaraan">
    <button onclick="checkPlat()">Cek Plat</button>
    <p id="result"></p>

    <script src="platKendaraan.js"></script>
</body>
<script>
    class PlatKendaraan {
    constructor(plat) {
        this.plat = plat;
    }

    cekGanjilGenap() {
        const platNumber = parseInt(this.plat.slice(-4)); // Ambil 4 digit terakhir nomor plat
        if (!isNaN(platNumber)) {
            if (platNumber % 2 === 0) {
                return "Genap";
            } else {
                return "Ganjil";
            }
        } else {
            return "Nomor plat tidak valid";
        }
    }
}

function checkPlat() {
    const inputPlat = document.getElementById("inputPlat").value;
    const platKendaraan = new PlatKendaraan(inputPlat);
    const result = platKendaraan.cekGanjilGenap();
    document.getElementById("result").innerText = Plat kendaraan ${inputPlat} adalah plat ${result};
}

</script>
</html>