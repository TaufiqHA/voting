<div class="container mx-auto">
    <div class="flex flex-col items-center mt-20">
        <h2 class="mb-14 font-bold text-2xl">VOTING | ANGKA 2022</h2>
        <div class="w-1/2 flex flex-wrap justify-evenly">
            <?php foreach ($data['vote'] as $vote) : ?>
                <div class="kotak w-40 h-20 flex flex-col items-center justify-center bg-teal-500 rounded-lg text-white mx-5 mb-5">
                    <h2><?php echo $vote['nama'] ?></h2>
                    <p id="nilai"><?php echo $vote['nilai'] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>