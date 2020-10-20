

# Universally Unique IDentifiers (UUID)

A Laravel package to generate uuid as primary keys.

## How to use?
1) Install `composer require rollswan/uuid`
2) use `uuid()` in migration, 

*Example:*

    Schema::create('posts', function (Blueprint  $table) {
        $table->uuid(); // you can also custom your uuid `uuid('post_uuid')`
        $table->string('title');
        $table->string('body');
        $table->timestamps();
    });


3) use `WithUuid` trait in your Model and declare the primary key

*Example:*

    namespace App;
    
    use Rollswan\Uuid\Traits\WithUuid;
    use Illuminate\Database\Eloquent\Model;
    
    class Post extends Model
    {
    	use WithUuid;
    	protected $primaryKey = 'uuid';
    }


Done!
This will automatically generate unique UUID whenever you save a new record.
