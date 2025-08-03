# AI Blog Assistant

A Laravel built web app that generates AI-written blog posts. Users can enter a blog title to draft a blog post using OpenAI's GPT model.

## Setup Instructions (Mac)

1. Clone repo
    ```
    git clone https://github.com/your-username/blog-ai.git
    cd blog-ai
    ```
2. Install dependencies
    ```
    composer install
    npm install && npm run dev
    ```
3. Configure .env file  
   Copy `.env.example` into a new `.env` file. Update OpenAI API information (if you do not have a key and need one, instructions for obtaining one are below):
    ```
    OPENAI_API_KEY=your_openai_api_key_here
    OPENAI_API_URL=https://api.openai.com/v1
    OPENAI_MODEL=gpt-3.5-turbo
    ```
4. Run the application
    ```
    php artisan serve
    ```

## Obtaining an OpenAI key

1. Sign up at platform.openai.com
2. Navigate to <b>Settings > Organization > API keys</b>
3. Paste API key into `.env` file shown above

## Reflection

1. <b>How did the AI output change when you modified the tone or role in your prompt?</b>  
   When I added a specified role (ie "You are a professional blogger"), the responses were delivered in a much more structured way. Changing the tone also resulted in more clear and to the point sentences. Small prompt changes significantly impacted clarity.

2. <b>What would you improve about the API integration for a production app?</b>  
   I would store generated drafts in a database so users could revist reference them.

3. <b>What’s one thing you learned about Laravel that you hadn’t used before?</b>  
   Seperation of AI logic as outlined in the module was new for me in Laravel. It gave a peek into scalability and cleanliness of the app's logic.

![img](storage/app/public/app_example.png)
