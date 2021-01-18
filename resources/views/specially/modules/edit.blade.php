<x-app-layout>
  <div>
     <div class="container py-4 grid grid-cols-6">
         <aside class="col-start-2 col-span-4 text-center">
              
              <h1 class="font-bold text-lg mb-4">Edit module</h1>
                <div class="grid grid-cols-4">
                  <div class=""> <a class="leading-8 mb-2 border-b-4 border-blue-200 pl-2" href="">Module's information</a></div>
                  <div class="">  <a class="leading-8 mb-2 border-b-4 border-trasnparent pl-2" href="">Lessons</a></div>
                  <div class=""> <a class="leading-8 mb-2 border-b-4 border-trasparent pl-2" href="">Goals</a></div>
                  <div class=""> <a  class="leading-8 mb-2 border-b-4 border-trasparent pl-2" href="">Beneficiaries</a></div>
            </div>
         
     

         </aside>
    




      <div class="col-start-1 col-span-6  card mt-9">
          <div class="card-body text-gray-800">
              <h1 class="text-2xl font-bold">Module's information</h1>
             
              <hr class="mt-3 mb-4">
             
               {{-- {!! Form::model($module, ['route' => ['updates.update',$module],'method' => 'put']) !!} --}}
             
               {!! Form::model($module, ['route' => ['updates.update',$module],'method' => 'put']) !!}
                 
                <div class="mb-3">
                     {!! Form::label('title', "Title's course") !!}
                     {!! Form::text('title', null, ['class' => 'form-input block w-full mt-1']) !!}

                </div>

                <div class="mb-3">
                  {!! Form::label('slug', "slug' course") !!}
                  {!! Form::text('slug', null, ['class' => 'form-input block w-full mt-1']) !!}

                </div>

                <div class="mb-3">
                  {!! Form::label('subtitle', "Subtitle's course") !!}
                  {!! Form::text('subtitle', null, ['class' => 'form-input block w-full mt-1']) !!}

                </div>

                <div class="mb-3">
                  {!! Form::label('description', "Description's course") !!}
                  {!! Form::textarea('description', null, ['class' => 'form-input block w-full mt-1']) !!}

                </div>

                


               
               {!! Form::close() !!}
            


          </div>

      </div>
   </div>
  </div>

  <x-slot name="Helperwithslugwithname">
     <script>
       //Slug automático
        document.getElementById("title").addEventListener('keyup', slugChange);

          function slugChange(){
              
              title = document.getElementById("title").value;
              document.getElementById("slug").value = slug(title);

          }

            function slug (str) {
                var $slug = '';
                var trimmed = str.trim(str);
                $slug = trimmed.replace(/[^a-z0-9-]/gi, '-').
                replace(/-+/g, '-').
                replace(/^-|-$/g, '');
                return $slug.toLowerCase();
            }

        
     </script>
  </x-slot>
</x-app-layout>