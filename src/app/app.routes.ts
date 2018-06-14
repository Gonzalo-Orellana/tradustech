import { HomeComponent } from './home/home.component';
import { AboutComponent } from './about/about.component';
import { ContactComponent } from './contact/contact.component';
import { Routes, RouterModule} from '@angular/router';
import { ModuleWithProviders } from '@angular/core';


const appRoutes: Routes = [
    { path: '', redirectTo:'/home', pathMatch: 'full'},
    { path: 'home', component: HomeComponent},
    { path: 'about', component: AboutComponent},
    { path: 'contact', component: ContactComponent}
  ]

  export const routes:ModuleWithProviders = RouterModule.forRoot(appRoutes);
  