<section class="py-24 bg-white">
    <div class="max-w-6xl mx-auto px-6">
        <h2 class="text-4xl font-serif text-center mb-16 tracking-wider">ONLINE COFFEE SHOP</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <?php for($i=0; $i<4; $i++): ?>
            <div class="group cursor-pointer">
                <div class="bg-gray-100 p-8 mb-4 hover:bg-gray-200 transition-colors">
                    <img src="https://via.placeholder.com/200" class="mx-auto">
                </div>
                <h4 class="font-bold text-center">Coffee Blend <?php echo $i+1; ?></h4>
                <p class="text-center text-gray-600 text-sm">$15.00</p>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</section>