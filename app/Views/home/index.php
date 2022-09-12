<div class="container mx-auto">
    <div class="flex flex-col items-center mt-20">
        <h2 class="mb-14 font-bold text-2xl">VOTING | ANGKA 2022</h2>
        <div class="w-1/2 flex flex-wrap justify-evenly">
            <!-- <?php foreach ($data['vote'] as $vote) : ?>
                <div class="kotak w-40 h-20 flex flex-col items-center justify-center bg-teal-500 rounded-lg text-white mx-5 mb-5">
                    <h2><?php echo $vote['nama'] ?></h2>
                    <p id="nilai"><?php echo $vote['nilai'] ?></p>
                </div>
            <?php endforeach; ?> -->
            <div class="kotak w-40 h-20 flex flex-col items-center justify-center bg-teal-500 rounded-lg text-white mx-5 mb-5">
                <h2><?php echo $data['vote'][0]['nama'] ?></h2>
                <p id="nilai"><?php echo $data['vote'][0]['nilai'] ?></p>
            </div>
            <div class="kotak w-40 h-20 flex flex-col items-center justify-center bg-teal-500 rounded-lg text-white mx-5 mb-5">
                <h2><?php echo $data['vote'][1]['nama'] ?></h2>
                <p id="nilai1"><?php echo $data['vote'][1]['nilai'] ?></p>
            </div>
            <div class="kotak w-40 h-20 flex flex-col items-center justify-center bg-teal-500 rounded-lg text-white mx-5 mb-5">
                <h2><?php echo $data['vote'][2]['nama'] ?></h2>
                <p id="nilai2"><?php echo $data['vote'][2]['nilai'] ?></p>
            </div>
            <div class="kotak w-40 h-20 flex flex-col items-center justify-center bg-teal-500 rounded-lg text-white mx-5 mb-5">
                <h2><?php echo $data['vote'][3]['nama'] ?></h2>
                <p id="nilai3"><?php echo $data['vote'][3]['nilai'] ?></p>
            </div>
            <div class="w-full flex justify-center">
                <a href="<?php echo BASEURL; ?>/home/reset" class="w-1/2 mx-auto flex justify-center">
                    <button class="w-1/2 bg-teal-500 px-3 py-2 rounded-xl font-semibold text-white mt-5">RESET</button>
                </a>
            </div>
        </div>
    </div>
</div>