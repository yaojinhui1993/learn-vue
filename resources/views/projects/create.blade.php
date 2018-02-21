@extends('app') @section('content')

@include('projects.list')

<form method="POST" action="/projects" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">

  {{ csrf_field() }}

  <div class="field">

    <div class="control">
      <label for="name" class="label">Project Name:</label>

      <input
        type="text"
        id="name"
        name="name"
        class="input"
        v-model="form.name"
        >
      <p
        class="help is-danger"
        v-if="form.errors.has('name')"
        v-text="form.errors.get('name')"></p>
    </div>
  </div>

  <div class="field">
    <div class="control">
      <label for="description" class="label">Project Description:</label>

      <input
        type="text"
        id="description"
        name="description"
        class="input"
        v-model="form.description"
        @keydown="form.errors.clear('description')"
        >
      <p class="help is-danger"
        v-if="form.errors.has('description')"
        v-text="form.errors.get('description')"></p>
    </div>
  </div>

  <div class="field">
    <div class="control">
      <button class="button is-primary" :disabled="form.errors.any()">Create</button>
    </div>
  </div>
</form>
@endsection