<div class="row" style="padding-top: 70px;">
    <div class="col-sm-offset-4 col-sm-4">
        <div class="panel panel-default">
            <div class="panel-body">
                <h3 class="text-center">Login Form</h3>
                <hr/>
                <?= $this->tag->form(['auth/postLogin', 'autocomplete' => 'off', 'class' => 'form']) ?>

                <div class="form-group">
                    <label for="username">Username:</label>
                    <?= $this->tag->textField(['username', 'class' => 'form-control', 'size' => 50]) ?>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <?= $this->tag->passwordField(['password', 'class' => 'form-control', 'size' => 50]) ?>
                </div>
                <div class="form-group">
                    <?= $this->tag->submitButton(['Login', 'class' => 'btn btn-primary']) ?>
                </div>

                <?= $this->tag->endForm() ?>

            </div>
        </div>
    </div>
</div>



