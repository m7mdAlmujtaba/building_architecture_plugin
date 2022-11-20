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
    <div class=''>
        <div class='row border'>
            <div class='col-8 p-2 position-relative'>
                <div>
                    <div class='lowcost-costruction'>
                    <h5 class='text-uppercase '>
                        Low Cost <span class='text-warning'>Construction</span>
                    </h5>
                </div>
                </div>
                <div class='image-container w-100 mx-auto'>
                    <img id='image' class='img-fluid shadow-effect' src='https://nexus.anewgo.com/api/exterior/client/waynehomes/nbr/Our%20Plans/plan/Annapolis/hybrid/scheme/Scheme%2011?key=376&elevId=126&mats=33&pals=11&sels=296&w=1800'>
                    <div id='overlay'>
                        <div class='cv-spinner'>
                            <span class='spinner'></span>
                        </div>
                    </div>
                </div>
               
            </div>
            <div class='col-4 vh-100 shadow-effect'>
                <div class='py-5'>
                    <div class='panel-title py-3 shadow-effect'>
                        <h2 class='left-border'>Customize Your House</h2>
                    </div>
                    <div class='form-container pt-3'>
                        <form method='POST' action='". get_site_url(). "/wp-content/plugins/building-architecture/public/partials/form.php' >
                            <div id='tab1' class=''> 
                                <div class='mb-3'>
                                    <div class=''>
                                        <label class='form-label text-uppercase small' for='structure'>Design/Rehabilitation</label>
                                    </div>
                                    <div class='form-check form-check-inline'>
                                        <input class='form-check-input' type='radio' name='workType' value='design' id='flexRadioDefault1'>
                                        <label class='form-check-label' for='flexRadioDefault1'>
                                        New design
                                        </label>
                                    </div>
                                    <div class='form-check form-check-inline'>
                                        <input class='form-check-input' type='radio' name='workType' value='rehabilitation' id='flexRadioDefault2' checked>
                                        <label class='form-check-label' for='flexRadioDefault2'>
                                        Rehabilitation
                                        </label>
                                    </div>
                                   
                                </div>
                                <div class='input-group mb-3'>
                                    <label class='input-group-text' for='inputGroupFile01'>Sketch</label>
                                    <input type='file' class='form-control' id='inputGroupFile01'>
                                </div>

                                <div class='input-group mb-3'>
                                    <input type='number' class='form-control' placeholder='Area'  name='area'>
                               
                                    <input type='number' class='form-control' placeholder='Floors' name='floors'>
                                </div>
                                <div class='mb-3'>
                                <label class='form-label text-uppercase small' for='structure'>Structure</label>
                                <select id='structure' class='form-select shadow-effect' name='structure'>
                                    <option value='01'>Reinforced concrete columns + Flat slab roof</option>
                                    <option value='02'>Reinforced concrete columns + Slab with beam</option>
                                    <option value='03'>Bearing walls + Roof with beams </option>
                                    <option value='04'>Coulmns + Post tension </option>
                                    <option value='05'>Precast panels </option>
                                    <option value='06'>Steal structure </option>
                                    <option value='07'>Removable containers </option>
                                </select>
                                </div>
                                <div class='mb-3'>
                                    <label class='form-label text-uppercase small' for='finishing'>Finishing</label>
                                    <select id='finishing' class='form-select shadow-effect' name='finishing'>
                                        <option value='01'>Red brick walls + Plastering + Glazing</option>
                                        <option value='02'>Hollow brick</option>
                                        <option value='03'>Precast panels + Glazing</option>
                                        <option value='04'>Sandwitch panels</option>
                                    </select>
                                </div>

                                <div class='mb-3'>
                                    <label class='form-label text-uppercase small' for='finishing-type'>Finishing Type</label>
                                    <select id='finishing-type' class='form-select shadow-effect' name='finishingType'>
                                        <option value='01'>High</option>
                                        <option value='02'>Medium</option>
                                        <option value='03'>Economical</option>
                                    </select>
                                </div>

                                <div class='mb-3'>
                                    <button id='request-quote' type='button' class='btn'> Request a Quote </button>
                                </div>
                            </div>

                            <div id='tab2' class='inactive'>
                                <div class='mb-3'>
                                    <label class='form-label text-uppercase small' for='seeling'>Name </label>
                                    <input type='text' name='name' placeholder='Name'>
                                </div>
                                <div class='mb-3'>
                                    <label class='form-label text-uppercase small' for='phone'>Phone </label>
                                    <input type='text' name='phone' placeholder='+249912345678'>
                                </div>
                                <div class='mb-3'>
                                    <label class='form-label text-uppercase small' for='email'>Email Address</label>
                                    <input type='email' placeholder='Email@Example.com' name='email'>
                                </div>
                                <div class='mb-3'>
                                    <label class='form-label text-uppercase small' for='note'>Message</label>
                                    <textarea id='message' name='message' placeholder='Message Contant'></textarea>
                                </div>
                                <div class='mb-3'>
                                    <button id='back-btn' type='button' class='btn btn-success'> Back </button>
                                    <button type='submit' class='btn'> Submit </button>
                                </div>
                            </div>

                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>";
if (isset($_POST['submit'])) {
    echo '<h1> Hello Nerds </h1>';
}
