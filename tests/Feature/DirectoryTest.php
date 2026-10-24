<?php
namespace Tests\Feature;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
class DirectoryTest extends TestCase
{
    use RefreshDatabase;
    public function test_seeders_create_five_records_and_can_run_twice(): void
    {
        $this->seed();
        $this->seed();
        $this->assertDatabaseCount('customers', 5);
        $this->assertDatabaseCount('users', 5);
        $this->assertDatabaseHas('customers', ['email' => 'ana@example.com', 'phone' => '09171234567']);
    }
    public function test_pages_display_records_added_to_the_database(): void
    {
        Customer::create(['full_name' => 'Database Customer', 'email' => 'db@example.com', 'phone' => '09170000000']);
        User::create(['username' => 'dbstaff', 'full_name' => 'Database Staff']);
        $this->get('/')->assertOk();
        $this->get('/about')->assertOk();
        $this->get('/customers')->assertOk()->assertSee('Database Customer')->assertSee('db@example.com');
        $this->get('/users')->assertOk()->assertSee('dbstaff')->assertSee('Database Staff');
    }
    public function test_empty_directories_are_readable(): void
    {
        $this->get('/customers')->assertOk()->assertSee('No customers found.');
        $this->get('/users')->assertOk()->assertSee('No users found.');
    }
    public function test_customer_names_are_html_escaped(): void
    {
        Customer::create(['full_name' => '<script>alert(1)</script>', 'email' => 'escape@example.com']);
        $this->get('/customers')->assertOk()
            ->assertSee('&lt;script&gt;alert(1)&lt;/script&gt;', false)
            ->assertDontSee('<script>alert(1)</script>', false);
    }
    public function test_duplicate_usernames_are_rejected(): void
    {
        User::create(['username' => 'duplicate', 'full_name' => 'First User']);
        $this->expectException(\Illuminate\Database\QueryException::class);
        User::create(['username' => 'duplicate', 'full_name' => 'Second User']);
    }
}
