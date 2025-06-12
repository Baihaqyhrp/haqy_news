<?php 
    require '../functions/functions.php';

    if(isset($_POST["submit"])) {
        if(tambah_berita($_POST) > 0) {
            echo "
                <script>
                    alert('Berita Berhasil Ditambahkan');
                    window.location.href = './berita.php';
                </script>
            ";   
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Berita</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="min-h-screen bg-gray-50">
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden p-6">
            <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">Tambah Berita Baru</h1>
            
            <form action="" method="POST" enctype="multipart/form-data" class="space-y-4">
                <div class="space-y-2">
                    <label for="title" class="block text-sm font-medium text-gray-700">Judul Berita</label>
                    <input type="text" name="title" id="title" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-300">
                </div>
                
                <div class="space-y-2">
                    <label for="slug" class="block text-sm font-medium text-gray-700">Slug</label>
                    <input type="text" name="slug" id="slug" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-300">
                </div>
                
                <div class="space-y-2">
                    <label for="body" class="block text-sm font-medium text-gray-700">Isi Berita</label>
                    <textarea name="body" id="body" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-300"></textarea>
                </div>
                
                <div class="space-y-2">
                    <label for="gambar" class="block text-sm font-medium text-gray-700">Gambar</label>
                    <div class="mt-1 flex items-center">
                        <input type="file" name="gambar" id="gambar" class="block w-full text-sm text-gray-500
                            file:mr-4 file:py-2 file:px-4
                            file:rounded-md file:border-0
                            file:text-sm file:font-semibold
                            file:bg-orange-50 file:text-orange-700
                            hover:file:bg-orange-100">
                    </div>
                </div>
                
                <button type="submit" name="submit" class="w-full bg-orange-400 hover:bg-orange-500 text-white font-medium py-2 px-4 rounded-md transition duration-200">
                    <i class="fas fa-paper-plane mr-2"></i>Simpan Berita
                </button>
            </form>
        </div>
    </div>
</body>
</html>