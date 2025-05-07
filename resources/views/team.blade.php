@extends('Layout.master')
@section('content')
<section class="team-section" style="text-align: center; padding: 50px 0; background-color: #fff; border-radius: 10px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
    <h2 class="team-title" style="font-size: 2em; margin-bottom: 20px; color: #000000;">Our Team</h2>
    <div class="team-container" style="display: flex; justify-content: center; flex-wrap: nowrap; overflow-x: auto;">
        <div class="team-member" style="background: #e7e7e7; border-radius: 10px; margin: 15px; padding: 20px; width: 220px; transition: transform 0.3s; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);">
            <img src="{{ asset('members/salah.jpg') }}" alt="Mahmoud Sabry" class="member-photo" style="border-radius: 50%; width: 150px; height: 150px; margin-bottom: 10px; border: 4px solid #fff; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); object-fit: cover;">
            <h3 class="member-name" style="font-size: 1.4em; margin: 10px 0 5px; color: #333;">Salah Khaled</h3>
            <p class="member-role" style="color: #666; margin-bottom: 15px;">work team</p>
            <p class="member-description" style="font-size: 0.9em; color: #555; line-height: 1.5;">We are a cohesive team that supports one another to achieve common goals. Each of us plays an important role in the success of the team.</p>
        </div>
          
        <div class="team-member" style="background: #e7e7e7; border-radius: 10px; margin: 15px; padding: 20px; width: 220px; transition: transform 0.3s; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);">
            <img src="{{ asset('members/ahmed.jpg') }}" alt="Mahmoud Sabry" class="member-photo" style="border-radius: 50%; width: 150px; height: 150px; margin-bottom: 10px; border: 4px solid #fff; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); object-fit: cover;">
            <h3 class="member-name" style="font-size: 1.4em; margin: 10px 0 5px; color: #333;">Ahmed Abd Elkader</h3>
            <p class="member-role" style="color: #666; margin-bottom: 15px;">work team</p>
            <p class="member-description" style="font-size: 0.9em; color: #555; line-height: 1.5;">We are a cohesive team that supports one another to achieve common goals. Each of us plays an important role in the success of the team.</p>
        </div>
        <div class="team-member" style="background: #e7e7e7; border-radius: 10px; margin: 15px; padding: 20px; width: 220px; transition: transform 0.3s; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);">
            <img src="{{ asset('members/mashaal.jpg') }}" alt="Mahmoud Sabry" class="member-photo" style="border-radius: 50%; width: 150px; height: 150px; margin-bottom: 10px; border: 4px solid #fff; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); object-fit: cover;">
            <h3 class="member-name" style="font-size: 1.4em; margin: 10px 0 5px; color: #333;">Mahmoud Sabry</h3>
            <p class="member-role" style="color: #666; margin-bottom: 15px;">work team</p>
            <p class="member-description" style="font-size: 0.9em; color: #555; line-height: 1.5;">We are a cohesive team that supports one another to achieve common goals. Each of us plays an important role in the success of the team.</p>
        </div>
          

        <div class="team-member" style="background: #e7e7e7; border-radius: 10px; margin: 15px; padding: 20px; width: 220px; transition: transform 0.3s; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);">
            <img src="{{ asset('members/mo.jpg') }}" alt="Mohamed Sherif" class="member-photo" style="border-radius: 50%; width: 150px; height: 150px; margin-bottom: 10px; border: 4px solid #fff; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); object-fit: cover;">
            <h3 class="member-name" style="font-size: 1.4em; margin: 10px 0 5px; color: #333;">Mohamed Sherif</h3>
            <p class="member-role" style="color: #666; margin-bottom: 15px;">work team</p>
            <p class="member-description" style="font-size: 0.9em; color: #555; line-height: 1.5;">We are a cohesive team that supports one another to achieve common goals. Each of us plays an important role in the success of the team.</p>
        </div>
        
        <div class="team-member" style="background: #e7e7e7; border-radius: 10px; margin: 15px; padding: 20px; width: 220px; transition: transform 0.3s; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);">
            <img src="{{ asset('members/rafeek.jpg') }}" alt="Mohamed Sherif" class="member-photo" style="border-radius: 50%; width: 150px; height: 150px; margin-bottom: 10px; border: 4px solid #fff; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); object-fit: cover;">
            <h3 class="member-name" style="font-size: 1.4em; margin: 10px 0 5px; color: #333;">Omar Rafeek</h3>
            <p class="member-role" style="color: #666; margin-bottom: 15px;">work team</p>
            <p class="member-description" style="font-size: 0.9em; color: #555; line-height: 1.5;">We are a cohesive team that supports one another to achieve common goals. Each of us plays an important role in the success of the team.</p>
        </div>
        
    </div>
</section>
@endsection
