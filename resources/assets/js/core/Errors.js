class Errors {
  constructor() {
    this.errors = {};
  }

  get(field) {
    if (this.errors[field]) {
      return this.errors[field][0];
    }
  }

  record(errors) {
    this.errors = errors;
  }

  clear(field) {
    if (!field) {
      this.errors = {};
      return;
    }

    if (this.errors[field]) {
      delete this.errors[field];
    }
  }

  has(field) {
    return this.errors.hasOwnProperty(field);
  }

  any() {
    return Object.keys(this.errors).length > 0;
  }

  getAll() {
    return this.errors;
  }
}

export default Errors;