<section class="py-24 bg-white text-center">
    <div class="max-w-6xl mx-auto px-6">
        <!-- Section Title -->
        <h2 class="text-4xl font-serif mb-16 tracking-wider text-gray-800">ONLINE COFFEE SHOP</h2>
        
        <!-- Products Grid -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <?php 
            $products = [
                ['img' => 'cpk3.jpg', 'name' => 'ETHIOPIAN ROAST', 'price' => '$18.00'],
                ['img' => 'cpk1.png', 'name' => 'COLOMBIAN BLEND', 'price' => '$15.00'],
                ['img' => 'cpk2.jpg', 'name' => 'ESPRESSO DARK', 'price' => '$22.00'],
                ['img' => 'cpk.webp', 'name' => 'ARABICA BEANS', 'price' => '$20.00']
            ];
            
            foreach($products as $product): 
            ?>
            <div class="group flex flex-col items-center">
                <div class="overflow-hidden mb-6 bg-gray-100 w-full aspect-square">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/' . $product['img']; ?>" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" 
                         alt="<?php echo $product['name']; ?>">
                </div>
                
                <!-- Product Details -->
                <h3 class="text-sm font-bold tracking-widest uppercase mb-2"><?php echo $product['name']; ?></h3>
                <p class="text-gray-500 text-sm"><?php echo $product['price']; ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>