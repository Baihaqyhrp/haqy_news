<?php
    $slug = $_GET['slug'] ?? '';
    $searchQuery = $_GET['search'] ?? '';

    require '../functions/functions.php';
    $item = query("SELECT * FROM news WHERE slug='$slug'")[0];

    // Get related news (for sidebar)
    $relatedNews = query("SELECT * FROM news WHERE slug != '$slug' ORDER BY RAND() LIMIT 3");

    // Get all tags for this news item
    $tags = explode(',', $item['tags']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $item['title']; ?> - HAQI News</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        primary: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            200: '#bae6fd',
                            300: '#7dd3fc',
                            400: '#38bdf8',
                            500: '#0ea5e9',
                            600: '#0284c7',
                            700: '#0369a1',
                            800: '#075985',
                            900: '#0c4a6e',
                        }
                    },
                    boxShadow: {
                        'soft': '0 4px 14px 0 rgba(0, 0, 0, 0.05)',
                        'soft-hover': '0 6px 20px 0 rgba(0, 0, 0, 0.08)',
                    }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-50 font-sans">

    <header class="fixed w-full z-10 bg-gradient-to-r from-primary-800 to-primary-700 shadow-lg">
        <div class="container mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <h1 class="text-3xl font-bold text-white tracking-tight">HAQI <span class="text-primary-200">News</span></h1>

                <form action="search.php" method="get" class="w-1/3">
                    <div class="relative">
                        <input type="text" name="search" placeholder="Search news..."
                               value="<?= htmlspecialchars($searchQuery) ?>"
                               class="w-full px-4 py-2 border-0 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-300 shadow-sm">
                        <button type="submit" class="absolute right-3 top-2 text-gray-500 hover:text-primary-600 transition-colors">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>

                <nav>
                    <ul class="flex space-x-6">
                        <li><a href="#" class="text-white hover:text-primary-200 transition-colors font-medium">Home</a></li>
                        <li><a href="#" class="text-white hover:text-primary-200 transition-colors font-medium">Politics</a></li>
                        <li><a href="#" class="text-white hover:text-primary-200 transition-colors font-medium">Business</a></li>
                        <li><a href="#" class="text-white hover:text-primary-200 transition-colors font-medium">Technology</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main class="container mx-auto px-4 pt-28 pb-14 flex gap-8">
        <article class="w-2/3 bg-white p-8 rounded-xl shadow-sm hover:shadow-soft transition-shadow duration-300">
            <nav class="text-sm text-gray-600 mb-6">
                <a href="#" class="hover:text-primary-600 transition-colors">Home</a> /
                <a href="#" class="hover:text-primary-600 transition-colors"><?= ucfirst($item['category']) ?></a> /
                <span class="text-gray-800 font-medium"><?= $item['title'] ?></span>
            </nav>

            <header class="mb-8">
                <h1 class="text-4xl font-bold text-gray-900 mb-4 leading-tight"><?= $item['title']; ?></h1>
                <div class="flex items-center text-sm text-gray-500 mb-4">
                    <span class="mr-4"><i class="far fa-user mr-1"></i> <?= $item['author'] ?></span>
                    <span class="mr-4"><i class="far fa-calendar-alt mr-1"></i> <?= date('F j, Y', strtotime($item['date'])) ?></span>
                    <span><i class="far fa-eye mr-1"></i> <?= number_format($item['views']) ?> views</span>
                </div>

                <span class="inline-block bg-primary-100 text-primary-800 text-xs px-3 py-1 rounded-full uppercase font-semibold tracking-wide">
                    <?= $item['category'] ?>
                </span>
            </header>

            <figure class="mb-8">
                <img src="../assets/images/news/<?= $item['image']; ?>" alt="<?= $item['title'] ?>"
                     class="w-full rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300">
                <figcaption class="text-sm text-gray-500 mt-2 italic"><?= $item['image_caption'] ?></figcaption>
            </figure>

            <div class="prose max-w-none text-gray-700 leading-relaxed">
                <?= nl2br($item['body']); ?>
            </div>

            <div class="mt-10 pt-6 border-t border-gray-200">
                <h3 class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-3">Tags</h3>
                <div class="flex flex-wrap gap-2">
                    <?php foreach ($tags as $tag): ?>
                        <?php if (!empty(trim($tag))): ?>
                            <a href="#" class="bg-gray-100 hover:bg-primary-100 hover:text-primary-700 text-gray-800 text-sm px-3 py-1 rounded-full transition-colors duration-200">
                                <?= trim($tag) ?>
                            </a>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="mt-8 pt-6 border-t border-gray-200">
                <h3 class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-3">Share this article</h3>
                <div class="flex space-x-4">
                    <a href="#" class="text-blue-600 hover:text-blue-800 transition-colors duration-200 transform hover:-translate-y-0.5"><i class="fab fa-facebook-f fa-lg"></i></a>
                    <a href="#" class="text-blue-400 hover:text-blue-600 transition-colors duration-200 transform hover:-translate-y-0.5"><i class="fab fa-twitter fa-lg"></i></a>
                    <a href="#" class="text-red-500 hover:text-red-700 transition-colors duration-200 transform hover:-translate-y-0.5"><i class="fab fa-pinterest-p fa-lg"></i></a>
                    <a href="#" class="text-gray-700 hover:text-gray-900 transition-colors duration-200 transform hover:-translate-y-0.5"><i class="fab fa-linkedin-in fa-lg"></i></a>
                </div>
            </div>
        </article>

        <aside class="w-1/3 space-y-6">
            <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-soft transition-shadow duration-300">
                <h2 class="text-xl font-bold text-gray-900 mb-4 pb-3 border-b border-gray-200">Related News</h2>
                <div class="space-y-4">
                    <?php foreach ($relatedNews as $related): ?>
                        <article class="flex gap-3 group">
                            <img src="../assets/images/news/<?= $related['image']; ?>" alt="<?= $related['title'] ?>"
                                 class="w-20 h-20 object-cover rounded-lg group-hover:opacity-90 transition-opacity">
                            <div>
                                <h3 class="font-semibold text-gray-900 group-hover:text-primary-600 transition-colors">
                                    <a href="?slug=<?= $related['slug'] ?>"><?= $related['title'] ?></a>
                                </h3>
                                <p class="text-xs text-gray-500 mt-1"><?= date('M j, Y', strtotime($related['date'])) ?></p>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="bg-gradient-to-br from-primary-50 to-primary-100 p-6 rounded-xl shadow-sm border border-primary-100">
                <h2 class="text-xl font-bold text-gray-900 mb-3">Newsletter</h2>
                <p class="text-sm text-gray-600 mb-4">Stay updated with our latest news. Subscribe to our newsletter.</p>
                <form class="space-y-3">
                    <input type="email" placeholder="Your email address"
                           class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-1 focus:ring-primary-500 focus:border-primary-500">
                    <button type="submit" class="w-full bg-primary-600 hover:bg-primary-700 text-white py-2 rounded-lg font-medium transition-colors duration-200 shadow-md hover:shadow-lg">
                        Subscribe
                    </button>
                </form>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-soft transition-shadow duration-300">
                <h2 class="text-xl font-bold text-gray-900 mb-4 pb-3 border-b border-gray-200">Popular Tags</h2>
                <div class="flex flex-wrap gap-2">
                    <a href="#" class="bg-gray-100 hover:bg-primary-100 hover:text-primary-700 text-gray-800 text-sm px-3 py-1 rounded-full transition-colors duration-200">Politics</a>
                    <a href="#" class="bg-gray-100 hover:bg-primary-100 hover:text-primary-700 text-gray-800 text-sm px-3 py-1 rounded-full transition-colors duration-200">Business</a>
                    <a href="#" class="bg-gray-100 hover:bg-primary-100 hover:text-primary-700 text-gray-800 text-sm px-3 py-1 rounded-full transition-colors duration-200">Technology</a>
                    <a href="#" class="bg-gray-100 hover:bg-primary-100 hover:text-primary-700 text-gray-800 text-sm px-3 py-1 rounded-full transition-colors duration-200">Health</a>
                    <a href="#" class="bg-gray-100 hover:bg-primary-100 hover:text-primary-700 text-gray-800 text-sm px-3 py-1 rounded-full transition-colors duration-200">Sports</a>
                    <a href="#" class="bg-gray-100 hover:bg-primary-100 hover:text-primary-700 text-gray-800 text-sm px-3 py-1 rounded-full transition-colors duration-200">Entertainment</a>
                    <a href="#" class="bg-gray-100 hover:bg-primary-100 hover:text-primary-700 text-gray-800 text-sm px-3 py-1 rounded-full transition-colors duration-200">Science</a>
                    <a href="#" class="bg-gray-100 hover:bg-primary-100 hover:text-primary-700 text-gray-800 text-sm px-3 py-1 rounded-full transition-colors duration-200">World</a>
                </div>
            </div>
        </aside>
    </main>

    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4 text-primary-200">HAQI News</h3>
                    <p class="text-gray-400 leading-relaxed">Delivering accurate and timely news from around the world since 2023.</p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4 text-primary-100">Categories</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Politics</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Business</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Technology</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Health</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4 text-primary-100">Company</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">About Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Contact</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Careers</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Advertise</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4 text-primary-100">Connect With Us</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white text-xl transition-colors transform hover:-translate-y-1"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white text-xl transition-colors transform hover:-translate-y-1"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white text-xl transition-colors transform hover:-translate-y-1"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white text-xl transition-colors transform hover:-translate-y-1"><i class="fab fa-linkedin-in"></i></a>
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