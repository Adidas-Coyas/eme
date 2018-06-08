<?php
/**
 * Created by PhpStorm.
 * User: coyas
 * Date: 6/3/18
 * Time: 6:44 PM
 */

use yii\widgets\Breadcrumbs;

$this->title = 'Serviços';
$this->params['breadcrumbs'][] = $this->title;
?>

<div id="breadcrumb">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
    </div>
</div>

<div class="services">
    <div class="container">
        <h3>Company Services</h3>
        <hr>
        <div class="col-md-6">
            <img src="images/4.jpg" class="img-responsive">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero,
                pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque</p>
        </div>

        <div class="col-md-6">
            <div class="media">
                <ul>
                    <li>
                        <div class="media-left">
                            <i class="fa fa-pencil"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Web Development</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat libero, pulvinar tincidunt leo consectetur eget.</p>
                        </div>
                    </li>
                    <li>
                        <div class="media-left">
                            <i class="fa fa-book"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Responsive Design</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat libero, pulvinar tincidunt leo consectetur eget.</p>
                        </div>
                    </li>
                    <li>
                        <div class="media-left">
                            <i class="fa fa-rocket"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Bootstrap Themes</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat libero, pulvinar tincidunt leo consectetur eget.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="sub-services">
    <div class="container">
        <div class="col-md-6">
            <div class="media">
                <ul>
                    <li>
                        <div class="media-left">
                            <i class="fa fa-pencil"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Landing Page</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat libero, pulvinar tincidunt leo consectetur eget.</p>
                        </div>
                    </li>
                    <li>
                        <div class="media-left">
                            <i class="fa fa-book"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Training</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat libero, pulvinar tincidunt leo consectetur eget.</p>
                        </div>
                    </li>
                    <li>
                        <div class="media-left">
                            <i class="fa fa-rocket"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Logo Design</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat libero, pulvinar tincidunt leo consectetur eget.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-md-6">
            <img src="images/4.jpg" class="img-responsive">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero,
                pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque</p>
        </div>
    </div>
</div>