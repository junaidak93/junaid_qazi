<div class="sidebar">
    <div class="sidebar-logo">
        <img class="logo" src="<?php echo $basesurl; ?>images/logowhite.svg" alt="logo">
    </div>
    <ul class="side-menu">
        <li class="menu-item <?php if ($urhere == "Home") {echo "active";} ?>">
            <a href="<?php echo $path; ?>home" class="menu-link">
                <i class="icon-Group-502 menu-icon"></i>
                Home
            </a>
        </li>
        <li class="menu-item <?php if ($urhere == "profile") {echo "active";} ?>">
            <a href="<?php echo $path; ?>profile" class="menu-link">
                <i class="icon-Group-503 menu-icon"></i>
                Profile
            </a>
        </li>
        <li class="menu-item <?php if ($urhere == "archive") {echo "active";} ?>">
            <a href="<?php echo $path; ?>archive" class="menu-link">
                <i class="icon-Group-504 menu-icon"></i>
                Archive
            </a>
        </li>
        <li class="menu-item <?php if ($urhere == "Packages") {echo "active";} ?>">
            <a href="<?php echo $path; ?>subscription-packages" class="menu-link">
                <i class="icon-Group-505 menu-icon"></i>
                Subscription Packages
            </a>
        </li>
        <li class="menu-item <?php if ($urhere == "terms") {echo "active";} ?>">
            <a href="<?php echo $path; ?>terms-and-conditions" class="menu-link">
                <i class="icon-Group-506 menu-icon"></i>
                Term & Conditions
            </a>
        </li>
        <li class="menu-item <?php if ($urhere == "aboutapp") {echo "active";} ?>">
            <a href="<?php echo $path; ?>about-app" class="menu-link">
                <i class="icon-Group-507 menu-icon"></i>
                About App
            </a>
        </li>
        <li class="menu-item <?php if ($urhere == "Policy") {echo "active";} ?>">
            <a href="<?php echo $path; ?>privacy-policy" class="menu-link">
                <i class="icon-Group-508 menu-icon"></i>
                Privacy Policy
            </a>
        </li>
        <li class="menu-item <?php if ($urhere == "setting") {echo "active";} ?>">
            <a href="<?php echo $path; ?>settings" class="menu-link">
                <i class="icon-Group-509 menu-icon"></i>
                Settings
            </a>
        </li>
        <li class="menu-item <?php if ($urhere == "faq") {echo "active";} ?>">
            <a href="<?php echo $path; ?>faqs" class="menu-link">
                <i class="icon-Group-510 menu-icon"></i>
                FAQs
            </a>
        </li>
        <li class="menu-item <?php if ($urhere == "Verified") {echo "active";} ?>">
            <a href="<?php echo $path; ?>viewed-car-history" class="menu-link">
                <i class="icon-Group-511 menu-icon"></i>
                Verified History
            </a>
        </li>
        <li class="menu-item <?php if ($urhere == "Crash") {echo "active";} ?>">
            <a href="<?php echo $path; ?>crash-detection" class="menu-link">
                <i class="icon-Group-752 menu-icon sm-icon"></i>
                Crash
            </a>
        </li>
        <li class="menu-item <?php if ($urhere == "Logout") {echo "active";} ?>">
            <a href="#" class="menu-link">
                <i class="icon-Group-511 menu-icon"></i>
                Logout
            </a>
        </li>
        <li class="menu-item <?php if ($urhere == "FleetDriver") {echo "active";} ?>">
            <a href="<?php echo $path; ?>fleet-driver-profile" class="menu-link">
                <i class="icon-Group-641 menu-icon"></i>
                Fleet Driver
            </a>
        </li>
        <li class="menu-item <?php if ($urhere == "Invite") {echo "active";} ?>">
            <a href="#" class="menu-link">
                <i class="icon-Group-642 menu-icon"></i>
                Invite Drivers
            </a>
        </li>
        
    </ul>
</div>