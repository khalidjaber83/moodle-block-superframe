<?php
class block_superframe_renderer extends plugin_renderer_base {

 function display_view_page($url, $width, $height,$user) {

        $data = new stdClass();

        // Page heading and iframe data.
        $data->heading = get_string('pluginname', 'block_superframe');
        $data->url = $url;
        $data->height = $height;
        $data->width = $width;
        $data->user=$user;


        // Start output to browser.
        echo $this->output->header();

        // Render the data in a Mustache template.
        echo $this->render_from_template('block_superframe/frame', $data);

        // Finish the page.
        echo $this->output->footer();
    }

    function fetch_block_content($url,$user,$text)
    {
        $data = new stdClass();


        // Page heading and iframe data.
        $data->text = $text;
        $data->url=$url;
        $data->user=$user;

       
        // Start output to browser.
      //echo $this->output->header();

                // Render the data in a Mustache template.
        echo $this->render_from_template('block_superframe/content', $data);

         // Finish the page.
//        echo $this->output->footer();


    }
}

