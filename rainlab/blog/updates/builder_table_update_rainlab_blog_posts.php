<?php namespace RainLab\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRainlabBlogPosts extends Migration
{
    public function up()
    {
        Schema::table('rainlab_blog_posts', function($table)
        {
            $table->boolean('c_autor');
            $table->string('a_name');
            $table->text('a_about');
            $table->boolean('a_other_article');
            $table->boolean('a_last_article');
            $table->boolean('act_col_backg');
            $table->string('background_color');
            $table->string('color_title');
            $table->string('c_p_class');
        });
    }
    
    public function down()
    {
        Schema::table('rainlab_blog_posts', function($table)
        {
            $table->dropColumn('c_autor');
            $table->dropColumn('a_name');
            $table->dropColumn('a_about');
            $table->dropColumn('a_other_article');
            $table->dropColumn('a_last_article');
            $table->dropColumn('act_col_backg');
            $table->dropColumn('background_color');
            $table->dropColumn('color_title');
            $table->dropColumn('c_p_class');
        });
    }
}
