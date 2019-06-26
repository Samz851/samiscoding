<?php $view->script('post', 'blog:app/bundle/post.js', 'vue') ?>

<article class="uk-article sam-single-post">
<h1 class="uk-article-title"><?= $post->title ?></h1>
    <?php if ($image = $post->get('image.src')): ?>
    <img src="<?= $image ?>" alt="<?= $post->get('image.alt') ?>">
    <?php endif ?>
    <div id="share-buttons-post-top">
           <!-- Buffer -->
        <a href="https://bufferapp.com/add?url='<?= $app['url']->current(0) ?>'&amp;text='<?= $post->title ?>'" target="_blank">
            <img src="https://simplesharebuttons.com/images/somacro/buffer.png" alt="Buffer" />
        </a>
        
        <!-- Digg -->
        <a href="http://www.digg.com/submit?url='<?= $app['url']->current(0) ?>'" target="_blank">
            <img src="https://simplesharebuttons.com/images/somacro/diggit.png" alt="Digg" />
        </a>
        
        <!-- Email -->
        <a href="mailto:?Subject='<?= $post->title ?>'&amp;Body=Don't miss out on this article '<?= $post->title ?>' @ '<?= $app['url']->current(0) ?>'">
            <img src="https://simplesharebuttons.com/images/somacro/email.png" alt="Email" />
        </a>
    
        <!-- Facebook -->
        <a href="http://www.facebook.com/sharer.php?u='<?= $app['url']->current(0) ?>'" target="_blank">
            <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
        </a>
        
        <!-- Google+ -->
        <a href="https://plus.google.com/share?url='<?= $app['url']->current(0) ?>'" target="_blank">
            <img src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google" />
        </a>
        
        <!-- LinkedIn -->
        <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url='<?= $app['url']->current(0) ?>'" target="_blank">
            <img src="https://simplesharebuttons.com/images/somacro/linkedin.png" alt="LinkedIn" />
        </a>
        
        <!-- Twitter -->
        <a href="https://twitter.com/share?url='<?= $app['url']->current(0) ?>'&amp;text='<?= $post->title ?>'" target="_blank">
            <img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" />
        </a>
    </div>
    <p class="uk-article-meta">

        <?= __('Written by %name% on %date%', ['%name%' => $this->escape($post->user->name), '%date%' => '<time datetime="'.$post->date->format(\DateTime::ATOM).'" v-cloak>{{ "'.$post->date->format(\DateTime::ATOM).'" | date "longDate" }}</time>' ]) ?>
    </p>
    <div class="uk-margin"><?= $post->content ?></div>
    <div id="share-buttons-post-bottom">
           <!-- Buffer -->
        <a href="https://bufferapp.com/add?url='<?= $app['url']->current(0) ?>'&amp;text='<?= $post->title ?>'" target="_blank">
            <img src="https://simplesharebuttons.com/images/somacro/buffer.png" alt="Buffer" />
        </a>
        
        <!-- Digg -->
        <a href="http://www.digg.com/submit?url='<?= $app['url']->current(0) ?>'" target="_blank">
            <img src="https://simplesharebuttons.com/images/somacro/diggit.png" alt="Digg" />
        </a>
        
        <!-- Email -->
        <a href="mailto:?Subject='<?= $post->title ?>'&amp;Body=Don't miss out on this article '<?= $post->title ?>' @ '<?= $app['url']->current(0) ?>'">
            <img src="https://simplesharebuttons.com/images/somacro/email.png" alt="Email" />
        </a>
    
        <!-- Facebook -->
        <a href="http://www.facebook.com/sharer.php?u='<?= $app['url']->current(0) ?>'" target="_blank">
            <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
        </a>
        
        <!-- Google+ -->
        <a href="https://plus.google.com/share?url='<?= $app['url']->current(0) ?>'" target="_blank">
            <img src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google" />
        </a>
        
        <!-- LinkedIn -->
        <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url='<?= $app['url']->current(0) ?>'" target="_blank">
            <img src="https://simplesharebuttons.com/images/somacro/linkedin.png" alt="LinkedIn" />
        </a>
        
        <!-- Twitter -->
        <a href="https://twitter.com/share?url='<?= $app['url']->current(0) ?>'&amp;text='<?= $post->title ?>'" target="_blank">
            <img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" />
        </a>
    </div>
</article>
<!-- MODAL -->
<div class="" tabindex="-1" role="dialog" id="">
  <div class="modal-dialog" role="document">
<!-- contact
    ================================================== -->
    <section id="contact" class="s-contact">

        <div class="overlay"></div>

        <div class="row section-header" data-aos="fade-up">
        <div class="col-full">
                <h3 class="subhead">Contact SAM</h3>
                <h1 class="display-2 display-2--light">Have a new project or an Idea? Reach Out</h1>
            </div>
        </div>

        <div class="row contact-content" data-aos="fade-up">
            
            <div class="contact-primary">

                <h3 class="h6">Send A Message</h3>

                <form name="contactForm" id="contactForm" method="post" action="" novalidate="novalidate">
                    <fieldset>
    
                    <div class="form-field">
                        <input name="contactName" type="text" id="contactName" placeholder="Your Name" value="" minlength="2" required="" aria-required="true" class="full-width">
                    </div>
                    <div class="form-field">
                        <input name="contactEmail" type="email" id="contactEmail" placeholder="Your Email" value="" required="" aria-required="true" class="full-width">
                    </div>
                    <div class="form-field">
                        <input name="contactSubject" type="text" id="contactSubject" placeholder="Subject" value="" class="full-width">
                    </div>
                    <div class="form-field">
                        <textarea name="contactMessage" id="contactMessage" placeholder="Your Message" rows="10" cols="50" required="" aria-required="true" class="full-width"></textarea>
                    </div>
                    <div class="form-field">
                        <button class="full-width btn--primary">Submit</button>
                        <div class="submit-loader">
                            <div class="text-loader">Sending...</div>
                            <div class="s-loader">
                                <div class="bounce1"></div>
                                <div class="bounce2"></div>
                                <div class="bounce3"></div>
                            </div>
                        </div>
                    </div>
    
                    </fieldset>
                </form>

                <!-- contact-warning -->
                <div class="message-warning">
                    Something went wrong. Please try again.
                </div> 
            
                <!-- contact-success -->
                <div class="message-success">
                    Your message was sent, thank you!<br>
                </div>

            </div> <!-- end contact-primary -->

            <div class="contact-secondary">
                <div class="contact-info">

                    <h3 class="h6 hide-on-fullwidth">Contact Info</h3>

                    <div class="cinfo">
                        <h5>Where to Find SAM</h5>
                        <p>
                            1090 Kristin Way<br>
                            Ottawa, ON<br>
                            K1K4B6 Canada
                        </p>
                    </div>

                    <div class="cinfo">
                        <h5>Email SAM At</h5>
                        <p>
                            SAM@samiscoding.com<br>
                            sam.otb@hotmail.ca
                        </p>
                    </div>
                    <ul class="contact-social">
                        <h5>Follow SAM On</h5>
                        <li>
                            <a href="https://medium.com/@samzota"><i class="fa fa-medium" aria-hidden="true"></i> <span class="contact-social">Medium</span></a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/samzota/"><i class="fa fa-linkedin" aria-hidden="true"></i> <span class="contact-social">LinkedIn</span></a>
                        </li>
                        <li>
                            <a href="https://github.com/Samz851"><i class="fa fa-github" aria-hidden="true"></i> <span class="contact-social">Github</span></a>
                        </li>
                    </ul> <!-- end contact-social -->

                </div> <!-- end contact-info -->
            </div> <!-- end contact-secondary -->

        </div> <!-- end contact-content -->

    </section> <!-- end s-contact -->

  </div>
</div>

<!-- END OF MODAL -->