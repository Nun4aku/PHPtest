<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_get_home(){
        $response = $this->get('/');
        $response->assertStatus(200);
    }
    public function test_get_about(){
        $response = $this->get('/about');
        $response->assertStatus(200);
    }
    public function test_get_contact(){
        $response = $this->get('/contact');
        $response->assertStatus(200);
    }
    //тест поиска по фразе паста 6
    public function test_get_search(){
        $response = $this->get('/',[
            'search' => 'паста 6'
        ]);
        $response = $this->get('/search?search=паста+6');
        $response->assertStatus(200);
    }

    //тест входа с правильным логином и паролем
    public function test_auth(){
        $this->post('/login',[
            'email' => 'test@test.ru',
            'password' => '12345678',
        ]);
        $response = $this->get('/home');
        $response->assertStatus(200);
    }

    //тест входа с не правильным логином и паролем
    public function test_auth_failed(){
        $this->post('/login',[
            'email' => 'testtest@test.ru',
            'password' => '12345678',
        ]);
        $response = $this->get('/home');
        $response->assertStatus(302);
    }

    //тест отправки новой пасты
    /*public function test_post_form_past(){

        $publ_data = time();
        $hash = md5($publ_data);

        $this->post('/',[
            'title' => 'test title',
            'pasta' => 'test pasta',
            'lifetime' => '600'
        ]);
        $response = $this->withSession(['session' => 'success'])->get('/');
        $response->assertStatus(200);
    }*/





}

