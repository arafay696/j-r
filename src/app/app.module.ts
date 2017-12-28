import {BrowserModule} from '@angular/platform-browser';
import {NgModule} from '@angular/core';

// Route
import {AppRoutingModule} from './route/app-routing.module';
import {AppComponent} from './app.component';

import {FormsModule} from '@angular/forms';
import {HttpClientModule} from '@angular/common/http';

// Services


@NgModule({
    declarations: [
        AppComponent
    ],
    imports: [
        BrowserModule,
        AppRoutingModule,
        HttpClientModule,
        FormsModule
    ],
    providers: [],
    bootstrap: [AppComponent]
})

export class AppModule {
}
