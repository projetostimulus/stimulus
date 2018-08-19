<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="form.css"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <?php
        // put your code here
        ?>

        <div class="info">
            <h1>Bem-vindo ao Stimulus</h1>

        </div>
        <!-- Modal -info -->
        <div class="container">
            <div id="modal-3" class="modal" data-modal-effect="slide-top">
                <div class="modal-content">
                    <h2 class="fs-title">Score Index</h2>
                    <h3 class="fs-subtitle">Getting the most out of your data</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce convallis consectetur ligula. Morbi dapibus tellus a ipsum sollicitudin aliquet. Phasellus id est lacus. Pellentesque a elementum velit, a tempor nulla. Mauris mauris lectus, tincidunt et purus rhoncus, eleifend convallis turpis. Nunc ullamcorper bibendum diam, vitae tempus dolor hendrerit iaculis. Phasellus tellus elit, feugiat vel mi et, euismod varius augue. Nulla a porttitor sapien. Donec vestibulum ac nisl sed bibendum. Praesent neque ipsum, commodo eget venenatis vel, tempus sit amet ante. Curabitur vel odio eget urna dapibus imperdiet sit amet eget felis. Vestibulum eros velit, posuere a metus eget, aliquam euismod purus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                    <input type="button" name="next" class="next action-button modal-close" value="Got it!">
                </div>
            </div>
        </div>

        <form class="steps" accept-charset="UTF-8" enctype="multipart/form-data" novalidate="">
            <ul id="progressbar">
                <li class="active">Dados do Responsável</li>
                <li>Sobre o portador</li>
                <li>Cultivation</li>
                <li>Cultivation2</li>
                <li>Retention</li>
            </ul>



            <!-- USER INFORMATION FIELD SET --> 
            <fieldset>
                <h2 class="fs-title">Dados do Responsável</h2>
                <h3 class="fs-subtitle">Informações basicas sobre o responsável</h3>
                <!-- Begin What's Your First Name Field -->
                <div class="hs_firstname field hs-form-field">

                    <label for="firstnameid">Primeiro nome *</label>

                    <input id="firstnameid" name="firstname" required="required" type="text" value="" placeholder="" data-rule-required="true" data-msg-required="Please include your first name" >
                    <span class="error1" style="display: none;">
                        <i class="error-log fa fa-exclamation-triangle"></i>
                    </span>
                </div>
                <!-- End What's Your First Name Field -->

                <!-- Begin What's Your Email Field -->
                <div class="hs_email field hs-form-field">

                    <label for="emailid">E-mail *</label>

                    <input id="emailid" name="email" required="required" type="email" value="" placeholder="" data-rule-required="true" data-msg-required="Please enter a valid email address." >
                    <span class="error1" style="display: none;">
                        <i class="error-log fa fa-exclamation-triangle"></i>
                    </span>
                </div>
                <!-- End What's Your Email Field -->

                <!-- Begin Total Number of Constituents in Your Database Field -->
                <div class="hs_email field hs-form-field hs_total_number_of_constituents_in_your_database">

                    <label for="telefoneresponsavelid">Telefone *</label>

                    <input id="telefoneresponsavelid" class="form-text hs-input" name="total_number_of_constituents_in_your_database" required="required"  type="number" value="" placeholder="" data-rule-required="true" data-msg-required="Please enter a valid number" >
                    <span class="error1" style="display: none;">
                        <i class="error-log fa fa-exclamation-triangle"></i>
                    </span>
                </div>

                <input type="button" data-page="1" name="next" class="next action-button" value="Next" />
                <div class="explanation btn btn-small modal-trigger" data-modal-id="modal-3"><i class="question-log fa fa-question-circle"></i> What Is This?</div>
            </fieldset>



            <!-- SOBRE O PORTADOR -->  
            <fieldset>
                <h2 class="fs-title">Sobre o portador</h2>
                <h3 class="fs-subtitle">Informações basicas sobre o paciente</h3>
                <!-- Begin Total Number of Donors in Year 1 Field -->
                <div class="form-item webform-component webform-component-textfield hs_total_number_of_donors_in_year_1 field hs-form-field" id="webform-component-acquisition--amount-1">

                    <label for="nomepacienteid">Nome do paciente *</label>

                    <input id="nomepacienteid" class="form-text hs-input" name="total_number_of_donors_in_year_1" required="required" type="text" value="" placeholder="" data-rule-required="true" data-msg-required="Por favor insira o nome do paciente">
                    <span class="error1" style="display: none;">
                        <i class="error-log fa fa-exclamation-triangle"></i>
                    </span>
                </div>

                <div class="form-item webform-component webform-component-textfield hs_total_number_of_donors_in_year_2 field hs-form-field" id="webform-component-acquisition--amount-2">

                    <p> Ele possui filhos? * 
                        <label>
                            <input class="with-gap" name="temfilho" value="simFilho" type="radio" />
                            <span>Sim</span>
                        </label>

                        <label>
                            <input class="with-gap" name="temfilho" value="naoFilho" type="radio" />
                            <span>Não</span>
                        </label>
                    </p>
                </div>
                <div id="cadastrarFilhos" style="display: none">
                    <div class="form-item webform-component webform-component-textfield webform-container-inline hs_total_donor_percent_change field hs-form-field">

                        <label for="nomefilhoid">Nome do filho(a)</label>

                        <input id="nomefilhoid" class="form-text hs-input" name="nomefilho" readonly="readonly" size="60" maxlength="128" type="text" value="" placeholder="0">
                    </div>
                </div>


                <!-- End Calc of Total Number of Donors Fields -->
                <input type="button" data-page="2" name="previous" class="previous action-button" value="Previous" />
                <input type="button" data-page="2" name="next" class="next action-button" value="Next" />
                <div class="explanation btn btn-small modal-trigger" data-modal-id="modal-3">What Is This?</div>
            </fieldset>



            <!-- Cultivation FIELD SET -->  
            <fieldset>
                <h2 class="fs-title">Cultivation and Nurturing your Donors</h2>
                <h3 class="fs-subtitle">How have you been nurturing donors to get better donations?</h3>
                <!-- Begin Average Gift Size in Year 1 Field -->
                <div class="form-item webform-component webform-component-textfield hs_average_gift_size_in_year_1 field hs-form-field" id="edit-submitted-cultivation-amount-1 average_gift_size_in_year_1-99a6d115-5e68-4355-a7d0-529207feb0b3_3256">

                    <label for="edit-submitted-cultivation-amount-1 average_gift_size_in_year_1-99a6d115-5e68-4355-a7d0-529207feb0b3_3256">What was your average gift size in year 1? *</label>

                    <input id="edit-submitted-cultivation-amount-1" class="form-text hs-input" name="average_gift_size_in_year_1" required="required" size="60" maxlength="128" type="number" value="" placeholder="" data-rule-required="true" data-msg-required="Please enter a valid number">
                    <span class="error1" style="display: none;">
                        <i class="error-log fa fa-exclamation-triangle"></i>
                    </span>
                </div>
                <!-- End Average Gift Size in Year 1 Field -->

                <!-- Begin Average Gift Size in Year 2 Field -->
                <div class="form-item webform-component webform-component-textfield hs_average_gift_size_in_year_2 field hs-form-field" id="webform-component-cultivation--amount-2">

                    <label for="edit-submitted-cultivation-amount-2 average_gift_size_in_year_2-99a6d115-5e68-4355-a7d0-529207feb0b3_3256">What was your average gift size in year 2? *</label>

                    <input id="edit-submitted-cultivation-amount-2" class="form-text hs-input" name="average_gift_size_in_year_2" required="required" size="60" maxlength="128" type="number" value="" placeholder="" data-rule-required="true" data-msg-required="Please enter a valid number">
                    <span class="error1" style="display: none;">
                        <i class="error-log fa fa-exclamation-triangle"></i>
                    </span>
                </div>
                <!-- End Average Gift Size in Year 2 Field -->

                <!-- Begin Average Gift Size Perchent Change Field -->
                <!-- THIS FIELD IS NOT EDITABLE | GRAYED OUT -->
                <div class="form-item webform-component webform-component-textfield webform-container-inline hs_average_gift_size_percent_change field hs-form-field" id="webform-component-cultivation--percent-change1">

                    <label for="edit-submitted-cultivation-percent-change1 average_gift_size_percent_change-99a6d115-5e68-4355-a7d0-529207feb0b3_3256">Average Gift Size Percent Change</label>

                    <input id="edit-submitted-cultivation-percent-change1" class="form-text hs-input" name="average_gift_size_percent_change" readonly="readonly" size="60" maxlength="128" type="text" value="" placeholder="0">
                </div>
                <!-- End Average Gift Size Perchent Change Field -->
                <input type="button" data-page="3" name="previous" class="previous action-button" value="Previous" />
                <input type="button" data-page="3" name="next" class="next action-button" value="Next" />
                <div class="explanation btn btn-small modal-trigger" data-modal-id="modal-3">What Is This?</div>
            </fieldset>



            <!-- Cultivation2 FIELD SET --> 
            <fieldset>
                <h2 class="fs-title">Total Cultivation in Donation</h2>
                <h3 class="fs-subtitle">Let's talk about your donations as a whole</h3>
                <!-- Begin Total Giving In Year 1 Field -->
                <div class="form-item webform-component webform-component-textfield" id="webform-component-cultivation--amount-3 hs_total_giving_in_year_1 field hs-form-field">

                    <label for=" edit-submitted-cultivation-amount-3 total_giving_in_year_1-99a6d115-5e68-4355-a7d0-529207feb0b3_4902">What was your total giving in Year 1? *</label>

                    <input id="edit-submitted-cultivation-amount-3" class="form-text hs-input" name="total_giving_in_year_1" required="required" size="60" maxlength="128" type="number" value="" placeholder="" data-rule-required="true" data-msg-required="Please enter a valid number">
                    <span class="error1" style="display: none;">
                        <i class="error-log fa fa-exclamation-triangle"></i>
                    </span>
                </div>
                <!-- End Total Giving In Year 1 Field -->

                <!-- Begin Total Giving In Year 2 Field -->
                <div class="form-item webform-component webform-component-textfield hs_total_giving_in_year_2 field hs-form-field" id="webform-component-cultivation--amount-4"> 

                    <label for=" edit-submitted-cultivation-amount-4 total_giving_in_year_2-99a6d115-5e68-4355-a7d0-529207feb0b3_4902">What was your total giving in Year 2? *</label>

                    <input id="edit-submitted-cultivation-amount-4" class="form-text hs-input" name="total_giving_in_year_2" required="required" size="60" maxlength="128" type="number" value="" placeholder="" data-rule-required="true" data-msg-required="Please enter a valid number">
                    <span class="error1" style="display: none;">
                        <i class="error-log fa fa-exclamation-triangle"></i>
                    </span>
                </div>

                <!-- End Total Giving In Year 2 Field -->

                <!-- Begin Average Gift Size Percent Change Field 2 -->
                <!-- THIS FIELD IS NOT EDITABLE | GRAYED OUT -->
                <div class="form-item webform-component webform-component-textfield webform-container-inline hs_total_giving_percent_change field hs-form-field" id="webform-component-cultivation--percent-change2">

                    <label for=" edit-submitted-cultivation-percent-change2 total_giving_percent_change-99a6d115-5e68-4355-a7d0-529207feb0b3_4902">Average Gift Size Percent Change</label>

                    <input id="edit-submitted-cultivation-percent-change2" class="form-text hs-input" name="total_giving_percent_change" readonly="readonly" size="60" maxlength="128" type="text" value="" placeholder="0">
                </div>
                <!-- End Average Gift Size Percent Change Field 2 -->
                <input type="button" data-page="4" name="previous" class="previous action-button" value="Previous" />
                <input type="button" data-page="4" name="next" class="next action-button" value="Next" />
                <div class="explanation btn btn-small modal-trigger" data-modal-id="modal-3">What Is This?</div>
            </fieldset>



            <!-- RETENTION FIELD SET -->  
            <fieldset>
                <h2 class="fs-title">Retention of your donors</h2>
                <h3 class="fs-subtitle">How long can you keep your donors and their donations?</h3>
                <!-- Begin Total Number of Donors Who Gave in Year 1 Field -->
                <div class="form-item webform-component webform-component-textfield hs_number_of_donors_in_year_1 field hs-form-field" id="webform-component-retention--amount-1"> 

                    <label for=" edit-submitted-retention-amount-1 number_of_donors_in_year_1-99a6d115-5e68-4355-a7d0-529207feb0b3_2983">What was your total number of donors who gave in year 1? *</label>

                    <input id="edit-submitted-retention-amount-1" class="form-text hs-input" name="number_of_donors_in_year_1" required="required" size="60" maxlength="128" type="number" value="" placeholder="" data-rule-required="true" data-msg-required="Please enter a valid number">
                    <span class="error1" style="display: none;">
                        <i class="error-log fa fa-exclamation-triangle"></i>
                    </span>
                </div>
                <!-- End Total Number of Donors Who Gave in Year 1 Field-->


                <!-- Begin Total Number of Donors Who Gave in Year 1 and Year 2 Field -->
                <div class="form-item webform-component webform-component-textfield" id="webform-component-retention--amount-2 hs_number_of_year_1_donors_who_also_gave_in_year_2 field hs-form-field">

                    <label for=" edit-submitted-retention-amount-2 number_of_year_1_donors_who_also_gave_in_year_2-99a6d115-5e68-4355-a7d0-529207feb0b3_2983">What was your total number of donors who gave in year 1 that also gave in year 2? *</label>

                    <input id="edit-submitted-retention-amount-2" class="form-text hs-input" name="number_of_year_1_donors_who_also_gave_in_year_2" required="required" size="60" maxlength="128" type="number" value="" placeholder="" data-rule-required="true" data-msg-required="Please enter a valid number">

                    <span class="error1" style="display: none;">
                        <i class="error-log fa fa-exclamation-triangle"></i>
                    </span>
                </div>
                <!-- End Total Number of Donors Who Gave in Year 1 and Year 2 Field -->

                <!-- Begin Retention Rate Percent -->
                <div class="form-item webform-component webform-component-textfield" id="webform-component-retention--percent-change field hs-form-field">

                    <label for="edit-submitted-retention-percent-change">Retention Rate</label>

                    <input id="edit-submitted-retention-percent-change" class="form-text hs-input" name="retention_rate_percent" readonly="readonly" size="60" maxlength="128" type="text" value="" placeholder="0">

                    <span class="error1" style="display: none;">
                        <i class="error-log fa fa-exclamation-triangle"></i>
                    </span>
                </div>

                <!-- End Retention Rate Percent -->


                <!-- Begin Final Calc -->
                <div class="form-item webform-component webform-component-textfield hs_fundraising_400_index field hs-form-field" id="webform-component-final-grade--grade">

                    <label for=" fundraising_400_index-99a6d115-5e68-4355-a7d0-529207feb0b3_2983">Fundraising 400 Index Score</label>

                    <input id="edit-submitted-final-grade-grade" class="form-text hs-input" name="fundraising_400_index" readonly="readonly" size="60" maxlength="128" type="text" value="" placeholder="0">
                </div>
                <!-- End Final Calc -->
                <input type="button" data-page="5" name="previous" class="previous action-button" value="Previous" />
                <input id="submit" class="hs-button primary large action-button next" type="submit" value="Submit">
                <div class="explanation btn btn-small modal-trigger" data-modal-id="modal-3">What Is This?</div>
            </fieldset>

            <fieldset>
                <h2 class="fs-title">It's on the way!</h2>
                <h3 class="fs-subtitle">Thank you for trying out our marketing grader, please go check your email for your fundraising report card and some helpful tips to improve it!</h3>
                <div class="explanation btn btn-small modal-trigger" data-modal-id="modal-3">What Is This?</div>
            </fieldset>

            <!--JavaScript at end of body for optimized loading-->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

            <script type="text/javascript" src="jquery.validate.min.js"></script>
            <script type="text/javascript" src="detalhesForm.js"></script>

            <script type="text/javascript" src="form.js"></script>
            <script type="text/javascript" src="jquery-ui.js"></script>

            <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    </body>
</html>
