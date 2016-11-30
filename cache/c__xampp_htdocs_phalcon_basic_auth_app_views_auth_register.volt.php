<div class="row" style="padding-top: 70px;">
    <div class="col-sm-offset-2 col-sm-8">
        <div class="panel panel-default">
            <div class="panel-body">
                <h3 class="text-center">Register Form</h3>
                <hr/>

                <?= $this->tag->form(['auth/postregister', 'autocomplete' => 'off', 'class' => 'form-horizontal']) ?>

                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <?= $this->tag->textField(['email', 'class' => 'form-control', 'size' => 250]) ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="username" class="col-sm-2 control-label">Username</label>
                        <div class="col-sm-10">
                            <?= $this->tag->textField(['username', 'class' => 'form-control', 'size' => 50]) ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                            <?= $this->tag->passwordField(['password', 'class' => 'form-control', 'size' => 50]) ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="first_name" class="col-sm-2 control-label">First Name</label>
                        <div class="col-sm-10">
                            <?= $this->tag->textField(['first_name', 'class' => 'form-control', 'size' => 50]) ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="last_name" class="col-sm-2 control-label">Last Name</label>
                        <div class="col-sm-10">
                            <?= $this->tag->textField(['last_name', 'class' => 'form-control', 'size' => 50]) ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                           <?= $this->tag->submitButton(['Save', 'class' => 'btn btn-primary']) ?>
                        </div>
                    </div>

                <?= $this->tag->endForm() ?>

            </div>
        </div>
    </div>
</div>