import { Component, OnInit, ElementRef, ViewChild } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent implements OnInit{
  @ViewChild('openModal') openModal:ElementRef;
  
  title = 'app';

  ngOnInit() {
    this.openModal.nativeElement.click();
  }

}


