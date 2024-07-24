{{-- @extends('layouts.app') --}}
 
{{-- @section('title', 'trainList')
 
@section('trainList')
    @parent --}}
 
    <section>
        <h2>@yield('page-title', 'TrainsList')</h2>
        <article>
            <ul>
                <li>
                    {{ 'Azienda'}}
                </li>
            </ul>
    
            <ul>
                <span>
                    <li>
                        {{ 'Stazione di partenza'}}
                    </li>
    
                    <li>
                        {{ 'Orario di partenza'}}
                    </li>  
                </span>
                
                <span>
                    <li>
                        {{ 'Stazione di arrivo'}}
                    </li>
    
                    <li>
                        {{ 'Orario di arrivo'}}
                    </li>
                </span>   
            </ul>
    
            <ul>
                <span>
                    <li>
                        {{ 'Codice Treno' }}
                    </li>
            
                    <li>
                        {{ 'Numero Carrozze'}}
                    </li>
            
                    <li>
                        {{ '(Disponibilità)'}}
                    </li>
                </span>         
            </ul>
        </article>  
    </section>
{{-- @endsection --}}