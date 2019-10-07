<div class="card" style="min-width: 200px;">
    <img src="Default.png" class="card-img-top" alt="Profile pic">
    <div class="card-body">
        <p class="card-text">
            <?php echo $profile['email']; ?>
        </p>
        <?php
        $badgeClass = ($profile['active'] ? "success" : "danger");
        ?>
        <p>
            <span class="badge badge-<?php echo $badgeClass; ?>">
                <?php echo ($profile['active'] ? "Actif" : "Inactif"); ?>
            </span>
        </p>
    </div>
</div>