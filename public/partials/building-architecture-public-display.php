<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://github.com/m7mdAlmujtaba/
 * @since      1.0.0
 *
 * @package    Building_Architecture
 * @subpackage Building_Architecture/public/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<?php
    echo "
    <div class='container-fluid'>
        <div class='row'>
            <div class='col-9 p-5 position-relative'>
                <div>
                    <h6 class='altitude-slogan  w-75 mx-auto'>Dream <span class='text-danger'>Wide</span> We Build it
                        <span class='text-success'>Right</span>
                    </h6>
                </div>
                <div class='image-container w-75 mx-auto'>
                    <img id='image' class='img-fluid shadow-effect' src='https://nexus.anewgo.com/api/exterior/client/waynehomes/nbr/Our%20Plans/plan/Annapolis/hybrid/scheme/Scheme%2011?key=376&elevId=126&mats=33&pals=11&sels=296&w=1800'>
                    <div id='overlay'>
                        <div class='cv-spinner'>
                            <span class='spinner'></span>
                        </div>
                    </div>
                </div>
                <div class='lowcost-costruction'>
                    <h5 class='text-uppercase '>
                        Low Cost <span class='text-warning'>Construction</span>
                    </h5>
                </div>


            </div>
            <div class='col-3 vh-100 bg-light shadow-effect'>
                <div class='py-5'>
                    <div class='panel-title py-3 shadow-effect'>
                        <h2 class='left-border right-border'>Customize Your House</h2>
                    </div>
                    <div class='form-container pt-5'>
                        <form>
                            <div class='mb-3'>
                                <label class='form-label' for='roof'>Roof</label>
                                <select id='roof' class='form-select' name='roof'>
                                    <option value='01'>First</option>
                                    <option value='02'>Second</option>
                                    <option value='03'>Third</option>
                                </select>
                            </div>
                            <div class='mb-3'>
                                <label class='form-label' for='seeling'>Seeling</label>
                                <select id='seeling' class='form-select' name='seeling'>
                                    <option value='01'>First</option>
                                    <option value='02'>Second</option>
                                    <option value='03'>Third</option>
                                </select>
                            </div>

                            <div class='mb-3'>
                                <label class='form-label' for='doors'>Doors</label>
                                <select id='doors' class='form-select' name='doors'>
                                    <option value='01'>First</option>
                                    <option value='02'>Second</option>
                                    <option value='03'>Third</option>
                                </select>
                            </div>

                            <div class='mb-3'>
                                <label class='form-label' for='select4'>Select</label>
                                <select id='select4' class='form-select' name='select4'>
                                    <option value='01'>First</option>
                                    <option value='02'>Second</option>
                                    <option value='03'>Third</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>";
    