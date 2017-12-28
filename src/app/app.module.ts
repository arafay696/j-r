import {BrowserModule} from '@angular/platform-browser';
import {NgModule} from '@angular/core';

// Route
import {AppRoutingModule} from './route/app-routing.module';
import {AppComponent} from './app.component';

// Services

@NgModule({
    declarations: [
        AppComponent
    ],
    imports: [
        BrowserModule,
        AppRoutingModule
    ],
    providers: [],
    bootstrap: [AppComponent]
})

export class AppModule {
}
