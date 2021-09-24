<?php $this->layout('layouts::website');?>

<!-- Door sections toe te voegen aan je layout kun je deze per pagina aanpassen -->
<form action="</php echo url('regristration.process') ?>" method="POST">
        <section class="regristration-form">
                <div>
                        <label for="">Voornaam</label>
                        <input type="text" name="firstname" value="<?php echo input('firstname') ?>">
                </div>

                <div>
                        <label for="">Achternaam</label>
                        <input type="text" name="lastname" value="<?php echo input('lastname') ?>">
                </div>

                <div>
                        <label for="">E-mail</label>
                        <input type="email" name="email" value="<?php echo input('email') ?>">
                </div>

                <button type="submit" class="brn">Regristreer</button>
        </section>
<h1>Welkom</h1>

<p>Dit is de start van jullie project website!</p>




