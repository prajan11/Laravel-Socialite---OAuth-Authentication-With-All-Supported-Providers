<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('facebook_provider_id')->nullable();
            $table->string('google_provider_id')->nullable();
            $table->string('github_provider_id')->nullable();
            $table->string('linkedin_provider_id')->nullable();
            $table->string('gitlab_provider_id')->nullable();
            $table->string('bitbucket_provider_id')->nullable();
            $table->string('twitter_provider_id')->nullable();
            $table->string('password')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('facebook_provider_id');
            $table->dropColumn('google_provider_id');
            $table->dropColumn('github_provider_id');
            $table->dropColumn('linkedin_provider_id');
            $table->dropColumn('gitlab_provider_id');
            $table->dropColumn('bitbucket_provider_id');
            $table->dropColumn('twitter_provider_id');
            $table->string('password');
        });
    }
};
