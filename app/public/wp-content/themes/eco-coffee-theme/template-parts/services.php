<section class="py-24 bg-white text-center">
    <div class="max-w-5xl mx-auto px-6">
        <h2 class="text-4xl font-serif mb-6 text-gray-800">OUR DELICIOUS OFFER</h2>
        <div class="flex justify-center items-center gap-4 mb-16 text-gray-400">
            <span class="h-px w-12 bg-gray-300"></span>
            <span class="text-2xl">☕</span>
            <span class="h-px w-12 bg-gray-300"></span>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-10">
            <?php 
            // මෙතන තමයි සේවාවන් සහ ඒවායේ විස්තර ටික තියෙන්නේ
            $services = [
                ['img' => 'cu-01.png', 'title' => 'TYPES OF COFFEE', 'desc' => 'A curated selection of premium blends, roasted for a unique experience.'],
                ['img' => 'cu-02.png', 'title' => 'BEAN VARIETIES', 'desc' => 'Sourced directly from high-altitude estates for the richest possible flavor.'],
                ['img' => 'cu-03.png', 'title' => 'COFFEE & PASTRY', 'desc' => 'Freshly baked, artisanal pastries paired perfectly with your favorite brew.'],
                ['img' => 'cu-04.png', 'title' => 'COFFEE TO GO', 'desc' => 'Enjoy our signature blends, conveniently prepared for your busy lifestyle.']
            ];
            
            foreach($services as $service): 
            ?>
            <div class="flex flex-col items-center">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/' . $service['img']; ?>" 
                     class="h-20 w-20 mb-6" 
                     alt="<?php echo $service['title']; ?>">
                
                <h3 class="text-lg font-bold tracking-widest mb-4"><?php echo $service['title']; ?></h3>
                
                <p class="text-sm text-gray-500 leading-relaxed max-w-[200px]">
                    <?php echo $service['desc']; ?>
                </p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>