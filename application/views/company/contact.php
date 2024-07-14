<div class="container-fluid">
    <div class="row">
    </div>
    <!-- End .row -->

    <div class="mb-5"></div>
    <!-- End .mb-5 -->

    <div class="container" id="product-inquiry">
        <h2 class="title text-center mb-4">Send Your Message to:
            <a href="<?= site_url('/' . $info['slag']); ?>" title="View Company Details" class="text-info">
                <span class="text-strong"><?= $info['company_name']; ?></span>
            </a>
        </h2>
        
        <?php if ($this->session->flashdata('success')): ?>
            <div class="alert alert-success text-center">
                <?= $this->session->flashdata('success'); ?>
            </div>
        <?php endif; ?>
        
        <div class="row" style="float: left;width: 100%;">
            <div class="col-md-12">
                <div class="card rounded-0 mb-4 specification">
                    <div class="card-body bg-white">
                        <div class="biz-form px-lg-5 py-lg-4">
                            <?= form_open('company/contact/' . $info['slag'], ['id' => 'inquiry-form']); ?>
                                <input type="hidden" name="company_id" value="<?= $info['id']; ?>">
                                <input type="hidden" name="user_id" value="<?= $this->session->userdata('user_id'); ?>">
                                <div class="biz-form">
                                    <div class="row mx-lg-n4 justify-content-lg-center">
                                        <div class="col-lg-6 px-lg-4">
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-form-label" for="subject">Subject<span class="text-danger">*</span></label>
                                                <div class="col-lg-10">
                                                    <input type="text" name="subject" id="subject" value="<?= set_value('subject'); ?>" class="form-control" placeholder="Enter Message Title">
                                                    <?= form_error('subject', '<div class="text-danger">', '</div>'); ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-form-label" for="message">Message<span class="text-danger">*</span></label>
                                                <div class="col-lg-10">
                                                    <textarea rows="4" name="message" id="message" class="form-control" placeholder="Enter Your Message on product requirement or other inquiries"><?= set_value('message'); ?></textarea>
                                                    <?= form_error('message', '<div class="text-danger">', '</div>'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info px-5 btn-md-down-small">
                                            <i class="fa fa-envelope-o mr-2"></i> Send Message
                                        </button>
                                    </div>
                                </div>
                            <?= form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End .container-fluid -->
