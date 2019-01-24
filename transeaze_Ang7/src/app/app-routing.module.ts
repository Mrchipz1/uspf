import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { HomeComponent } from './views/home/home.component';
import { DetailsComponent } from './views/details/details.component';
import { BankComponent } from './views/bank/bank.component';
import { InvoiceComponent } from './views/invoice/invoice.component';

const routes: Routes = [
  {path:'home',component:HomeComponent},
  {path:'details',component:DetailsComponent},
  {path:'bank',component:BankComponent},
  {path:'invoice',component:InvoiceComponent}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
