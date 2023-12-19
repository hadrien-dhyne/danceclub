<?php 
$navigation = [
	[
		"label" => "Dashboard",
		"href" => "/admin/",
		"is_active" => $_SERVER['REQUEST_URI'] === "/admin/"
	], 
	[
		"label" => "Articles",
		"href" => "/admin/articles/",
		"is_active" => $_SERVER["REQUEST_URI"] === "/admin/articles/"
	], 
	[
		"label" => "Utilisateurs",
		"href" => "/admin/users/",
		"is_active" => $_SERVER["REQUEST_URI"] === "/admin/users/"
	]
];
?>
<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <img class="h-8 w-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
                </div>
                <!-- Navigation Links -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">                    
                    <?php foreach($navigation as $item): ?>
                        <a href="<?= $item['href'] ?>" class="<?= $item['is_active'] ? 'bg-gray-900 text-white' : 'text-gray-300' ?> hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium"><?= $item['label'] ?></a>
                     <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="hidden md:block">
                <div class="ml-4 flex items-center md:ml-6">
                    <a href="/index.php" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                        Retour au site
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="md:hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <?php foreach($navigation as $item): ?>
        <a href="<?= $item['href'] ?>" class="<?= $item['is_active'] ? 'bg-gray-900 text-white' : 'text-gray-300' ?> block hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium"><?= $item['label'] ?></a>
      <?php endforeach; ?>
      </div>
      <div class="border-t border-gray-700 pb-3 pt-3">
        <div class="px-2">
          <a href="/index.php" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Retour au site</a>
        </div>
      </div>
    </div>
  </nav>

 
 
