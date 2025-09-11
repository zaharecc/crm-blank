<?php

declare(strict_types=1);

namespace App\MoonShine\Layouts;

use MoonShine\ColorManager\ColorManager;
use MoonShine\Contracts\AssetManager\AssetElementContract;
use MoonShine\Contracts\ColorManager\ColorManagerContract;
use MoonShine\Laravel\Layouts\AppLayout;
use MoonShine\UI\Components\{
    Assets,
    Favicon,
    Header,
    Head,
    Logo,
    Meta,
    Profile
};
use MoonShine\UI\Components\{
    Layout\Layout
};

final class MoonShineLayout extends AppLayout
{
    /**
     * @return array|AssetElementContract[]
     */
    protected function assets(): array
    {
        return [
            ...parent::assets(),
        ];
    }

    protected function menu(): array
    {
        return [
            ...parent::menu(),
        ];
    }

    /**
     * @param ColorManager $colorManager
     */
    protected function colors(ColorManagerContract $colorManager): void
    {
        parent::colors($colorManager);

        // $colorManager->primary('#00000');
    }

    public function build(): Layout
    {
        return parent::build();
    }

         protected function getLogoComponent(): Logo
    {
        return Logo::make(
            $this->getHomeUrl(),
            '/default/logo.png',
            '/default/logo-small.png',
        );
    }

    protected function getFaviconComponent(): Favicon
    {
        return Favicon::make();
    }

    protected function getHeadComponent(): Head
    {
        return Head::make([
            Meta::make()->customAttributes([
                'name' => 'csrf-token',
                'content' => csrf_token(),
            ]),
            $this->getFaviconComponent()->bodyColor($this->getColorManager()->get('body'))
            ->customAssets([
                'apple-touch' => $this->getAssetManager()->getAsset('default/apple-touch-icon.png'),
                '32' => $this->getAssetManager()->getAsset('default/favicon-32x32.png'),
                '16' => $this->getAssetManager()->getAsset('default/favicon-16x16.png'),
                'safari-pinned-tab' => $this->getAssetManager()->getAsset('default/safari-pinned-tab.svg'),
                'web-manifest' => $this->getAssetManager()->getAsset('default/site.webmanifest'),
            ]),
            Assets::make(),
        ])
            ->bodyColor($this->getColorManager()->get('body'))
            ->title($this->getPage()->getTitle() ?: moonshineConfig()->getTitle());
    }

    protected function getHeaderComponent(): Header
    {
        return Header::make();
    }

     protected function getFooterMenu(): array
    {
        return [
            'https://t.me/gunslingeris' => 'Telegram',
        ];
    }

    protected function getFooterCopyright(): string
    {
        return \sprintf(
            <<<'HTML'
                &copy; 2021-%d by
                zaharec
                HTML,
            now()->year,
        );
    }

    protected function getProfileComponent(bool $sidebar = false): Profile
    {
        return Profile::make(withBorder: $sidebar)->defaultAvatar('/default/avatar.svg');
    }
}
