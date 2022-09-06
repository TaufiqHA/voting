<div class="container mx-auto">
    <div class="flex flex-col items-center mt-20">
        <h2 class="mb-10 font-bold text-2xl">VOTING | ANGKA 2022</h2>
        <div class="w-1/2 flex flex-wrap justify-evenly">
            <?php for ($i = 1; $i <= 5; $i++) : ?>
                <div class="kotak w-40 h-20 flex items-center justify-center bg-teal-500 rounded-lg text-white mx-5 mb-5">
                    <h2>kotak <?php echo $i; ?></h2>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</div>