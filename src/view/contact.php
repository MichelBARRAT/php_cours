<?php require_once __DIR__."/../../templates/header.php"; ?>
<?php require_once  __DIR__."/../../templates/nav.php"; ?>
<div class="container-fluid">
    <form action="../service/contact_process.php" method="POST">
        <div class="form-group col-lg-2">
            <label for="exampleInputEmail1">Email</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" cols="30" rows="10"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>
<?php require_once  __DIR__."/../../templates/footer.php"; ?>