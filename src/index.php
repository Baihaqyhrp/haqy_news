<?php 
    require './functions/functions.php';
    $news = query("SELECT * FROM news ORDER BY id ASC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAQI News</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <header class="shadow-md fixed w-full bg-white z-10">
        <div class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <h1 class="text-3xl font-bold text-blue-800">HAQI News</h1>
                
                <!-- Search Form -->
                <form action="search.php" method="get" class="w-1/3">
                    <div class="relative">
                        <input type="text" name="search" placeholder="Search news..." 
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <button type="submit" class="absolute right-3 top-2 text-gray-500 hover:text-blue-700">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
                
                <nav>
                    <ul class="flex space-x-6">
                        <li><a href="#" class="hover:text-blue-700">Home</a></li>
                        <li><a href="#" class="hover:text-blue-700">Politics</a></li>
                        <li><a href="#" class="hover:text-blue-700">Business</a></li>
                        <li><a href="#" class="hover:text-blue-700">Technology</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main class="px-44 pt-32 pb-14">
        <section class="grid grid-cols-3 gap-12">
            <?php foreach($news as $item): ?>
                <div class="hover:scale-105 transition-transform duration-300 ease-in-out transform">
                    <img src="./assets/images/news/<?= $item['image']; ?>"  alt="" class="rounded-md">
                    <a href="news/index.php?slug=<?= $item['slug']; ?>" class="font-bold text-xl hover:text-blue-700"><?= $item['title']; ?></a>
                </div>
            <?php endforeach; ?>
        </section>
    </main>
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">HAQI News</h3>
                    <p class="text-gray-400">Delivering accurate and timely news from around the world since 2023.</p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Categories</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Politics</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Business</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Technology</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Health</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Company</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">About Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Contact</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Careers</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Advertise</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Connect With Us</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>© 2023 HAQI News. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>