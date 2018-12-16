<?php namespace RainLab\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRainlabBlogCategories extends Migration
{
    public function up()
    {
        Schema::table('rainlab_blog_categories', function($table)
        {
            $table->string('seo_title');
            $table->text('seo_description');
            $table->string('seo_keywords');
            $table->string('background_color')->nullable();
            $table->boolean('act_cat_back')->nullable();
            $table->string('color_title')->nullable();
            $table->string('c_c_class')->nullable();
        }
    }
    
    public function down()
    {
        Schema::table('rainlab_blog_categories', function($table)
        {
            $table->dropColumn('seo_title');
            $table->dropColumn('seo_description');
            $table->dropColumn('seo_keywords');
            $table->dropColumn('background_color');
            $table->dropColumn('act_cat_back');
            $table->dropColumn('color_title');
            $table->dropColumn('c_c_class');
        });
    }
}
