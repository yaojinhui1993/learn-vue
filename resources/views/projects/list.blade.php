<h1 class="title">My Projects</h1>

<div class="content">
  <ul>
    @foreach($projects as $project)
      <li>{{ $project->name }}</li>
    @endforeach
  </ul>
</div>

<hr>