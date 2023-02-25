<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostlistControllerTest extends TestCase
{
    // php artisan make:test Http/Controllers/PostListControllerTestでこのファイルを作成
    // ①web.phpの中身をコメントアウト
    // ②php artisan test --filter topPageBlog を実行しtestが通らないのを確認してからtestを進める
    // ③php artisan make:controller PostListControllerを作成
    // ④PostListController.phpとweb.phpにindexの指定を記述
    // ⑤php artisan test --filter topPageBlogが通ればOK
    // ※Laravel8.5以下でエラー原因を調べる場合はブラウザ/エラーログ/$this->withoutExceptionHandling();のいずれかで確認
    // ⑥php artisan make:model Post -mf でモデル/マイグレーション/ファクトリを同時作成
    // ⑦マイグレーションとファクトリを編集し、Seeder/DatabaseSeeder.phpに追記
    // ⑧(MAMPを立ち上げた状態で)php artisan migrate:fresh --seed でダミーデータ追加
    // ⑨Controllerとbladeに必要コードを記述
    // ⑩このファイルにuse RefreshDatabase; を記述、中身を追加してphp artisan test --filter topPageBlogを実行

    use RefreshDatabase;

    /** @test */
    function topPageBlog() {

        // $this->withoutExceptionHandling();

        $post1 = Post::factory()->create();
        $post2 = Post::factory()->create();

        $this->get('/')
            ->assertOk()
            ->assertSee($post1->title)
            ->assertSee($post2->title);
    }
}
