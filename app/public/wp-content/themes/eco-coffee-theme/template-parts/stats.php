<section class="py-20 bg-gray-50">
    <div class="max-w-6xl mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-10 text-center">
            
            <?php 
            $stats = [
                ['number' => '250', 'title' => 'VARIETIES OF COFFEE', 'desc' => 'Finest blends from across the globe.'],
                ['number' => '123', 'title' => 'HOURS OF TESTING', 'desc' => 'Perfecting every single roast.'],
                ['number' => '321', 'title' => 'COFFEE MARKETS', 'desc' => 'Reaching hearts worldwide.'],
                ['number' => '220', 'title' => 'COFFEE BRANDS', 'desc' => 'Trusted by connoisseurs daily.']
            ];
            
            foreach($stats as $stat): 
            ?>
            <div class="flex flex-col items-center">
                <h2 class="text-5xl font-serif text-[#a68966] mb-4">
                    <?php echo $stat['number']; ?>
                </h2>
                
                
                <h3 class="text-sm font-bold tracking-widest uppercase mb-2 text-gray-800">
                    <?php echo $stat['title']; ?>
                </h3>
                
                
                <p class="text-xs text-gray-500 leading-relaxed max-w-[180px]">
                    <?php echo $stat['desc']; ?>
                </p>
            </div>
            <?php endforeach; ?>
            
        </div>
    </div>
</section>