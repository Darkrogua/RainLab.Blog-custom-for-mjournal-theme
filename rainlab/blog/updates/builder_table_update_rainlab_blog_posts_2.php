<?php namespace RainLab\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRainlabBlogPosts2 extends Migration
{
    public function up()
    {
        Schema::table('rainlab_blog_posts', function($table)
        {
            $table->string('background_color', 191)->nullable()->change();
            $table->string('color_title', 191)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('rainlab_blog_posts', function($table)
        {
            $table->string('background_color', 191)->nullable(false)->change();
            $table->string('color_title', 191)->nullable(false)->change();
        });
    }
}
