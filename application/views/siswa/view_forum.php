<?php $this->load->view('siswa/header'); ?>

        <div class="data-table-area mg-t-15 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Forum Diskusi</h1>
                                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                    <div class="add-product">
                                        <a href="#" data-toggle="modal" data-target="#PrimaryModalhdbgcl">Buat Diskusi Baru</a>
                                    </div>
                                    <div class="visible-xs">
                                        <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#PrimaryModalhdbgcl">Buat Diskusi Baru</a>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div class="chat-discussion" style="height: auto">
                                                <?php foreach($semuaforum->result() as $forum){ ?>
                                                <div class="chat-message">
                                                    <div class="profile-hdtc">
                                                         <img class="message-avatar" src="<?= base_url('kiaalap/img/product/pro4.jpg') ?>" alt="">
                                                    </div>
                                                    <div class="message">
                                                        <a class="message-author" href="<?= base_url('siswa/forum/detail/'.$forum->id) ?>"> <?= $forum->judul ?> </a>
                                                        <span class="message-date"> <?= $forum->tgl_dibuat ?> </span>
                                                        <span class="message-content"> <?= $forum->isi ?> </span>
                                                        <div class="m-t-md mg-t-10">
                                                            <a class="btn btn-xs btn-default"><i class="fa fa-book"></i> Modul 1</a>
                                                            <a class="btn btn-xs btn-default"><i class="fa fa-comments"></i> 1 Komentar</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php $this->load->view('siswa/footer'); ?>