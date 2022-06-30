
    <header class="flex flex-col items-center justify-center text-start md:text-center h-[568px] bg-gradient-to-bl from-[#005FED] to-[#4891FF] py-10 md:py-[100px] px-10 md:px-[72px] text-white">
        <div class="lg:w-2/3 mt-[68px]">
            <h1 class="text-3xl md:text-6xl pb-6 font-bold leading-normal">Klinik Gigi</h1>
            <p class="text-lg">Kami menyediakan banyak sekali daftar klinik gigi yang berada di depok dengan berbagai macam review dan komentar dari berbagai macam pengunjung layanan kami.</p>
        </div>
    </header>
    <div class="bg-white py-10 md:py-[50px] px-10 md:px-[72px] border-b-2 border-b-[#D1D5DB]">
        <div class="grid sm:grid-rows-1 sm:grid-cols-2 md:grid-rows-3 md:grid-cols-3 lg:grid-rows-2 lg:grid-cols-4 gap-6">
            <?php foreach ($faskes as $fsk) { ?>
            <div class="swiper-slide flex flex-col text-[#23292B] rounded-md bg-white shadow-lg overflow-hidden cursor-pointer transition ease-in-out hover:scale-[0.955]" onclick="window.location='<?= base_url() ?><?= strtolower(str_replace(' ', '', $fsk['jenis'])) ?>/detail/<?= $fsk['id'] ?>'">
                <img class="object-cover w-full h-[204px]" src="https://static.konsula.com/images/practice/0001001000/0001000679/rumah-sakit-grha-permata-ibu.800x600.jpg" alt="">
                <div class="flex flex-col justify-between h-[232px] p-3 w-full">
                    <div class="overflow-hidden">
                        <p class="text-xs font-bold"><?= $fsk['jenis'] ?></p>
                        <h3><?= $fsk['nama'] ?></h3>
                        <p class="text-xs text-[#9A9DA0] pb-3"><?= $fsk['alamat'] ?></p>
                        <p class="text-ellipsis text-xs pb-3"><?= $fsk['deskripsi'] ?></p>
                    </div>
                    <div class="w-full flex justify-between items-center">
                        <div class="flex items-center">
                            <i class='bx bxs-star text-md pr-1' style="color: #FFC400;"></i>
                            <p class="text-[#9A9DA0]"><?= $fsk['skor_rating'] ?></p>
                        </div>
                        <p class="text-[#9A9DA0]"><span class="text-[#005FED] font-bold"><?= $fsk['jumlah_dokter'] ?></span> Dokter <span class="text-[#005FED] font-bold"><?= $fsk['jumlah_pegawai'] ?></span> Pegawai</p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>