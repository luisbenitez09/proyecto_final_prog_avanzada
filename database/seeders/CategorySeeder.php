<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->name = "Terror";
        $category->description = "Horror films aim to awaken our fear with shocking, tense and terrifying scenes, or through an anguish setting and direction.";
        $category->save();

        $category = new Category();
        $category->name = "Comedy";
        $category->description = "Comedies are funny movies, built for the viewer to have a fun time and not stop laughing.";
        $category->save();  

        $category = new Category();
        $category->name = "Romance";
        $category->description = "These films present stories of love and heartbreak, and are usually combined with the drama genre.";
        $category->save(); 

        $category = new Category();
        $category->name = "Action";
        $category->description = "This type of film is high-tension and contains chases and many fights, in addition to a direction that emphasizes movement.";
        $category->save(); 

        $category = new Category();
        $category->name = "Drama";
        $category->description = "They are serious films, with very realistic characters and situations, similar to everyday life, including tense and dramatic situations.";
        $category->save(); 

        $category = new Category();
        $category->name = "Animation";
        $category->description = "Animation is the technique that gives a sensation of movement to images, drawings, figures, people, computerized images that creativity can imagine.";
        $category->save(); 

        $category = new Category();
        $category->name = "Adventure";
        $category->description = "These films tell interesting and exciting stories in normally exotic contexts, and with content similar to that of action films.";
        $category->save(); 

        $category = new Category();
        $category->name = "Musical";
        $category->description = "Musical films are characterized by having scenes where the actors dance choreographies and sing.";
        $category->save(); 

        $category = new Category();
        $category->name = "War";
        $category->description = "War movies include stories that revolve around war. It's possible to see military operations, the training of soldiers, action on the battlefield, and even love stories";
        $category->save(); 

        $category = new Category();
        $category->name = "Science fiction";
        $category->description = "They revolve around fantastic and, in many cases, futuristic situations that may or may not include time travel or three-dimensional.";
        $category->save(); 

        $category = new Category();
        $category->name = "Crime";
        $category->description = "These films contain content related to murder or organized crime. The plot usually includes a homicide or a criminal act that, throughout the film, is clarified.";
        $category->save(); 

        $category = new Category();
        $category->name = "Family";
        $category->description = "Films for the whole family, generally with 'friendly' content and for all audiences.";
        $category->save(); 
    }
}
