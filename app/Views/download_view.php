<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Pusat Download</h3>
        </div>
        <div class="card-body">
            <div class="row justify-content">
                <div class="col-lg-6">
                    <div class="section-title pb-10">
                        <p class="text">Pada versi pertama ini, kami beri gratis installasi untuk licensi 1 PC! Harapan kami produk <span style="color:blue;">CTrlSoft</span> akan bertambah kompleks yang menjadikan produk ini lebih powerfull dan dapat memenuhi segala kekurangan yang ada di Software Retail lainnya.</p>
                    </div> <!-- row -->
                </div>

                <div class="col-lg-6">
                    <div class="row justify-content" style="width: 100%; display: flex; align-items: center; justify-content: center;">
                        <img src="<?= base_url('/uploads/cloud-computing.svg') ?>" width="80" height="auto">
                    </div>
                    <div class="row justify-content" style="width: 100%; display: flex; align-items: center; justify-content: center;">
                        <a href="<?= base_url('/licenseapi.ctrlsoft.id/CTrlSoftcomp/System/CtrlSoft.AppUpdate.7z'); ?>" class="btn btn-primary mt-10" style="max-width: 128; text-align: center;">Download 32/64 bit</a>
                    </div>
                </div>
            </div>

            <hr />

            <div class="card mt-10">
                <div class="card-header">
                    <h6>Software Requirments</h6>
                </div>
                <div class="card-body">
                    <div class="col-lg-12">
                        <div class="section-title pb-10">
                            <p>Untuk installasi di PC anda, terlebih dahulu pastikan PC anda sudah ada component berikut ini</p>
                            <li>.Net Framework 4.5 <a href="https://dotnet.microsoft.com/download/dotnet-framework/net45">download</a></li>
                            <li>Microsoft Visual C++ 2015 32bit <a href="<?= base_url('/perquisite/VC_redist.x86.exe'); ?>">download</a></li>
                        </div> <!-- row -->
                    </div>
                </div>
            </div>

            <hr />

            <div class="card mt-10">
                <div class="card-header">
                    <h6>CTrlSoft Database</h6>
                </div>
                <div class="card-body">
                    <div class="col-lg-12">
                        <div class="section-title pb-10">
                            <li>Engine LocalDB 32bit (Khusus sebagai server) <a href="<?= base_url('/perquisite/SqlLocalDB_2016_x86.msi'); ?>">download</a></li>
                            <li>Engine LocalDB 64bit (Khusus sebagai server) <a href="<?= base_url('/perquisite/SqlLocalDB_2016_x64.msi'); ?>">download</a></li>
                        </div> <!-- row -->
                    </div>
                </div>
            </div>

            <hr />

            <div class="card mt-10">
                <div class="card-header">
                    <h6>Minimum system requirments</h6>
                </div>
                <div class="card-body">
                    <div class="row justify-content section-title pb-10">
                        <div class="col-lg-6">
                            <div class="section-title pb-10">
                                <li>for client</li>
                            </div>
                            <div class="row section-title pb-10">
                                <ul class="ml-40">
                                    <span>
                                        OS Windows 7</br>
                                        CPU Intel Core 2 Duo</br>
                                        Storage 40 Gb</br>
                                        Memory RAM 1 Gb</br>
                                    </span>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="section-title pb-10">
                                <li>for server</li>
                            </div>
                            <div class="row section-title pb-10">
                                <ul class="ml-40">
                                    <span>
                                        OS Windows 7 atau Windows Server 2008 R2</br>
                                        CPU Intel Core i3</br>
                                        Storage 80 Gb</br>
                                        Memory RAM 4 Gb</br>
                                    </span>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr />

            <div class="col-lg-12">
                <div class="row justify-content">
                    <div class="col-lg-6 contact-info pt-30">
                        <div class="section-title pb-10">
                            Jika anda kesulitan dalam menginstall CTrlSoft, anda dapat menghubungi kami di Nomor :
                        </div>
                        <div class="single-contact-info contact-color-3 mt-10 d-flex">
                            <div class="contact-info-icon">
                                <i class="lni lni-phone"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <div style="height: 100%; display: flex; align-items: center; justify-content: left;">
                                    <p class="text">No. HP :
                                        <a href="tel:+6281217472711" class="list-item-link" target="_self" rel="noopener nofollow" aria-label="phone-volume">0812 1747 2711</a>
                                    </p>
                                </div>
                            </div>
                        </div> <!-- single contact info -->
                    </div>

                    <div class="col-lg-6 contact-info pt-30">
                        <div class="row justify-content" style="width: 100%; display: flex; align-items: flex-end; justify-content: flex-end;">
                            <a href="https://api.whatsapp.com/send/?phone=6281217472711&text=Hi,+saya+ingin+mengajak+berbicara+mengenai+ctrlsoft+apakah+anda+ada+ditempat?+Terima+kasih+..." class="btn btn-outline-success btn-rounded" style="max-width: 128; margin-top: 8pt; text-align: center;">Chat Whatsapp</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>