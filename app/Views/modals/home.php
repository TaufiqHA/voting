<div class="modal w-[300px] right-1/2 translate-x-1/2 absolute flex justify-center top-96 mt-5 scale-0 transition duration-300 lg:w-[500px]" id="modal-box">
    <div class="w-full bg-slate-200 self-center absolute p-5 rounded-xl shadow-2xl flex justify-center">
        <img src="<?php echo BASEURL; ?>/public/img/close.svg" alt="..." class="absolute right-3 top-3 cursor-pointer w-[20px] lg:w-[25px]" id="close-modal-box">
        <form action="<?php echo BASEURL; ?>/public/kelas/inputKelas" method="post" class="w-full px-8 flex flex-col items-center">
            <h2 class="font-semibold mb-3 text-primary lg:font-bold ">TAMBAH KELAS</h2>
            <label for="name" class="w-full font-semibold text-dark mb-3 block text-lg">Kelas</label>
            <input type="text" name="name" class="w-full outline-none rounded-xl py-1 px-4 focus:ring-1 focus:ring-primary focus:border-primary focus:border text-primary block mb-3" autocomplete="off">
            <label for="pelajaran" class="w-full font-semibold text-dark mb-3 block text-lg">Mata Pelajaran</label>
            <input type="text" name="pelajaran" class="w-full outline-none rounded-xl py-1 px-4 focus:ring-1 focus:ring-primary focus:border-primary focus:border text-primary block mb-3" autocomplete="off">
            <label for="wali" class="w-full font-semibold text-dark mb-3 block text-lg">Guru Mata Pelajaran</label>
            <input type="text" name="wali" class="w-full outline-none rounded-xl py-1 px-4 focus:ring-1 focus:ring-primary focus:border-primary focus:border text-primary block mb-3" autocomplete="off">
            <label for="nip" class="w-full font-semibold text-dark mb-3 block text-lg">NIP</label>
            <input type="number" name="nip" class="w-full outline-none rounded-xl py-1 px-4 focus:ring-1 focus:ring-primary focus:border-primary focus:border text-primary block mb-3" autocomplete="off">
            <label for="semester" class="w-full font-semibold text-dark mb-3 block text-lg">Semester</label>
            <input type="text" name="semester" class="w-full outline-none rounded-xl py-1 px-4 focus:ring-1 focus:ring-primary focus:border-primary focus:border text-primary block mb-3" autocomplete="off">
            <label for="ta" class="w-full font-semibold text-dark mb-3 block text-lg">Tahun Ajaran</label>
            <input type="text" name="ta" class="w-full outline-none rounded-xl py-1 px-4 focus:ring-1 focus:ring-primary focus:border-primary focus:border text-primary block mb-3" autocomplete="off">
            <button class="w-1/2 bg-primary py-2 px-5 rounded-full font-semibold text-white ">TAMBAH</button>
        </form>
    </div>
</div>