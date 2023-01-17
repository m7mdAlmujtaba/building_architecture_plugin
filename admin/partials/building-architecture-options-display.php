<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://github.com/m7mdAlmujtaba/
 * @since      1.0.0
 *
 * @package    Building_Architecture
 * @subpackage Building_Architecture/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="container">
    <div class="py-5">
        <h2>Building Architecture</h2>
    </div>
<!--
    <form method="" action="">
        <div class="row">
            <div class="col-6 bg-light p-5">
                <div class="mb-3">
                    <label class="form-label" for="project-name">Project Name</label>
                    <input type="text" class="form-control" id="project-name" name="project_name">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="project-roof">Roof</label>
                    <select class="form-select architecture-select" id="project-roof" name="project_roof">
                        <option value="01">Steel</option>
                        <option value="02">Alaminum</option>
                        <option value="03">Alaminum</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label w-100" for="project-walls">Walls</label>
                    <select class="form-select architecture-select" id="project-walls" name="project_walls">
                        <option value="01">Fired Bricks</option>
                        <option value="02">Aerated Concrete</option>
                        <option value="03">Foam Concrete Blocks</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label w-100" for="project-walls">Doors</label>
                    <select class="form-select architecture-select" id="project-walls" name="project_walls">
                        <option value="01">Wooden Doors</option>
                        <option value="02">Aerated Concrete</option>
                        <option value="03">Foam Concrete Blocks</option>
                    </select>
                </div>
                
            </div>

            <div class="col-6">
                <div class="mb-3">
                    <img id="selectedimg" class="img-fluid" src="" onerror="this.src='https://via.placeholder.com/300';">
                </div>
                <div class="mb-3">
                    <input type="file" id="imgup" class="form-control">
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Save Project</button>
                </div>
            </div>
    </form>
-->
<div class="col-6 bg-light p-5">
<div class="mb-3">
                    <label class="form-label" for="project-name">You can use this Shortcode inside Your page to display gallery</label>
                    <input type="text" class="form-control" id="project-name" name="project_name" value="[architecture_shortcode]">
                </div>
</div>
</div>
</div>