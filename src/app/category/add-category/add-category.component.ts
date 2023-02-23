import { Component, OnInit } from '@angular/core';
import { CategoryService } from 'src/app/category.service';
import { NgForm } from '@angular/forms';
import { Router } from '@angular/router';
import { Category } from 'src/app/category';

@Component({
  selector: 'app-add-category',
  templateUrl: './add-category.component.html',
  styleUrls: ['./add-category.component.css']
})
export class AddCategoryComponent implements OnInit {

  constructor(
    public cs:CategoryService,
    private router:Router,

  ) {}

  ngOnInit(): void {
  }

  submitForm(categoryForm: NgForm){
    console.log(categoryForm.value);

    if(categoryForm.value.id == null){
      this.cs.createCategory(categoryForm.value)
      .subscribe((res) => {
        console.log(res);
        this.router.navigate(["/"]);
      })
    }
    else{
      this.cs.updateCategory(categoryForm.value.id, categoryForm.value)
      .subscribe((res) =>
        this.router.navigate(["/"]))
    }
    this.resetForm(categoryForm);

  }

  resetForm(categoryForm: NgForm) {
    if(categoryForm != null){
      categoryForm.reset();
      this.cs.selectedCategory = new Category();
    }
  }

}
